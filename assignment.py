redo = True
while redo:
    print("what pizza size do you want? Extra Large or Large")
    pizza = input()
    if pizza != "Large" and pizza != "Extra Large":
        print("We don't have that size")
    else:
        redo = False

if pizza == "Large":
    print("you selected", pizza)
    pizza_price = 6
elif pizza == "Extra Large":
    print("you selected Extra Large")
    pizza_price = 10

print("How many toppings do you want? We only have up to 4 toppings")
redo = True
while redo:
    toppings = int(input())
    if toppings == 1:
        price_toppings = 1
        redo = False
    elif toppings == 2:
        price_toppings = 1.75
        redo = False
    elif toppings == 3:
        price_toppings = 2.50
        redo = False
    elif toppings == 4:
        price_toppings = 3.35
        redo = False
    else:
        print("Only choose up to 4 toppings please")

print("The cost of your pizza is", price_toppings + pizza_price, "without tax")
