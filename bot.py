from telegram.ext import CommandHandler, MessageHandler, Filters, Updater
from telegram import ParseMode
from telegram.ext.dispatcher import run_async

bot_token = input('Enter the TOKEN: ')
updater = Updater(token=bot_token,  workers = 8 , use_context=True)
dp = updater.dispatcher                                                          
print('Bot started \n')

@run_async
def start(update, context):
    context.bot.send_message(chat_id=update.message.chat_id, text='HELLO WORLD')

@run_async
def help(update, context):
    context.bot.send_message(chat_id=update.message.chat_id, text='Help is the way')

@run_async
def doc_handle(update, context):
    doc = update.message.document
    file = context.bot.getFile(doc.file_id)
    file.download(doc.file_name)
    context.bot.send_message(chat_id=update.message.chat_id, text='File downloaded sucessfully')


start_handler = CommandHandler('start', start)
dp.add_handler(start_handler)

help_handler = CommandHandler('help', help)
dp.add_handler(help_handler)

receive_doc = MessageHandler(Filters.document, doc_handle)
dp.add_handler(receive_doc)

updater.start_polling()
updater.idle()
