import pyodbc
import tycepTeleBot
token = "577176573:AAGDfNF69sI7Hwa6FklvKaxtoQJm3tkmwE4"
url = "https://api.telegram.org/bot" + token + "/"

bot = tycepTeleBot
bot.set_url(url)
offset = None

sett = {'driver': 'DRIVER={MySQL}', 'server': 'SERVER=spb911kr.beget.tech', 'port': 'PORT=21',
        'db': 'DATABASE=spb911kr_stats', 'user': 'UID=spb911kr_stats', 'pw': 'PWD=Maks1988'}
# driver = 'DRIVER={SQL Server}'
# server = 'SERVER=localhost'
# port = 'PORT=1433'
# db = 'DATABASE=testdb'
# user = 'UID=me'
# pw = 'PWD=pass'

conn_str = ';'.join([sett['driver'], sett['server'], sett['db'], sett['user'], sett['pw']])

conn = pyodbc.connect(conn_str)
cursor = conn.cursor()

cursor.execute('select * from Users')
row = cursor.fetchone()
rest_of_rows = cursor.fetchall()
print(row)

#
# while True:
#     bot.get_updates(offset)
#     last_update = bot.get_last_update()
#
#     last_update_id = last_update['update_id']
#     last_chat_text = last_update['message']['text']
#     last_chat_id = last_update['message']['chat']['id']
#     last_chat_name = last_update['message']['chat']['first_name']
#
#     if last_chat_text.lower() == 'привет':
#         bot.send_message(last_chat_id, 'Пошел на хуй ' + last_chat_name)
#
#     if last_chat_text == '/reg':
#         pass
#
#     offset = last_update_id + 1
#

#-----------------------------------------------------------------------------------
# chat_id = bot.get_chat_id(bot.last_update(bot.get_updates_json(url)))
# update_id = bot.last_update(bot.get_updates_json(url))['update_id']
# while True:
#     if update_id == bot.last_update(bot.get_updates_json(url))['update_id']:
#             bot.send_message(bot.get_chat_id(bot.last_update(bot.get_updates_json(url))), 'test')
#             update_id += 1
#     time.sleep(0.2)









# from bs4 import BeautifulSoup
# import urllib3
#
# token = '577176573:AAGDfNF69sI7Hwa6FklvKaxtoQJm3tkmwE4'
# urlGetUpdates = 'https://api.telegram.org/bot' + token + '/getUpdates'
#
# url = 'https://api.telegram.org/bot' + token
# urlmsg = url + '/sendMessage?chat_id=288642712&text=PIDOR'
# http = urllib3.PoolManager()
# response = http.request('GET', urlGetUpdates)
# print(response.data)
# soup = BeautifulSoup(response.data, "html.parser")

# $jsonDecoded = json_decode($json, TRUE);
#
# $lastId = count($jsonDecoded["result"])-1;
# $chat_id = $jsonDecoded["result"][$lastId]["message"]["chat"]["id"];
# $message = $jsonDecoded["result"][$lastId]["message"]["text"];
# web

