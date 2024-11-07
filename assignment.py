print("what pizza size do you want? Extra Large or Large")
pizza = input()
if pizza == "Large":
  print("you selected", pizza)
  Large = 6
elif pizza == "Extra Large":
  print("you selected Extra Large")
  Extra_Large = 10
print("How many toppings do you want? We only have up to 4 toppings")
toppings = input()
if input == 1:
  price_toppings = 1
  print("The cost of your pizza is", price_toppings + pizza, "without tax")
elif input == 2:
    price_toppings = 1.75
    print("The cost of your pizza is", price_toppings + pizza, "without tax")
elif input == 3:
    price_toppings = 2.50
    print("The cost of your pizza is", price_toppings + pizza, "without tax")
elif input == 4:
    price_toppings = 3.35
print("The cost of your pizza is", price_toppings + pizza, "without tax")