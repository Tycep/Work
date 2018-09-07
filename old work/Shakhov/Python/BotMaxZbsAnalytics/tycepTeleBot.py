import requests
url = ''


def set_url(bot_url):
    global url
    url = bot_url


def get_updates(offset=None, timeout=30):
    method = 'getUpdates'
    params = {'timeout': timeout, 'offset': offset}
    resp = requests.get(url + method, params)
    result_json = resp.json()['result']
    return result_json


def send_message(chat_id, text):
    params = {'chat_id': chat_id, 'text': text}
    method = 'sendMessage'
    resp = requests.post(url + method, params)
    return resp


def get_last_update():
    get_result = get_updates()

    if len(get_result) > 0:
        last_update = get_result[-1]
    else:
        last_update = get_result[len(get_result)]

    return last_update


# def get_updates_json(request):
#     params = {'timeout': 30, 'offset': None}
#     method = "getUpdates"
#     response = requests.get(request + method, data=params)
#     return response.json()
#
#
# def last_update(data):
#     get_result = data['result']
#     total_updates = len(get_result) - 1
#     return get_result[total_updates]
#
#
# def get_chat_id(update):
#     chat_id = update['message']['chat']['id']
#     return chat_id
#
#
# def send_message(chat, text):
#     params = {'chat_id': chat, 'text': text}
#     method = "sendMessage"
#     response = requests.post(url + method, data=params)
#     return response
