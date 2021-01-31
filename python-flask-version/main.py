from flask import Flask, render_template, request


web_site = Flask(__name__)


@web_site.route("/", methods=['GET'])
def index():
	return render_template('index.html')

@web_site.route("/createbutton", methods=['GET'])
def register():
  amount = request.args.get("amount")
  account = request.args.get("account")
  button = "<br><p>Press this Button to continue to Paypal and contiune as a guest to cash out your card</p><form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'> <input type='hidden' name='cmd' value='_xclick'> <input type='hidden' name='business' value="+account+"> <input type='hidden' name='lc' value='US'> <input type='hidden' name='item_name' value='Visa Gift Card ATM'> <input type='hidden' name='amount' value="+amount+"> <input type='hidden' name='currency_code' value='USD'> <input type='hidden' name='button_subtype'value='services'><input type='hidden' name='no_note' value='0'> <input type='hidden' name='tax_rate' value='0.000'> <input type='hidden' name='shipping' value='0.00'> <input type='hidden' name='bn' value='PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest'><input type='image' src='https://www.flaticon.com/svg/static/icons/svg/2577/2577736.svg' border='0' name='submit' alt='Get Your Visa Money with Paypal' height='7%' width='7%'><img alt='' border='0' src='https://www.flaticon.com/svg/static/icons/svg/2577/2577736.svg' width='1' height='1'></form><br> <p>Thank you come again and share!</p>"
  
  
  return render_template('getpaid.html', amount=amount, account=account, button=button)

web_site.run(host='0.0.0.0', port=8080)
