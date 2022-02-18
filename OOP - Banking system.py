#PARENT CLASS

class User():
    def __init__(self, name, age, gender):
        self.name = name
        self.age = age
        self.gender = gender

    def customer_details(self):
        print("Customer Details : ")
        print("")
        print("Name : ", self.name)
        print("Age : ", self.age)
        print("Gender : ", self.gender)


#CHILD CLASS

class Bank(User):
    def __init__(self, name, age, gender):
        super().__init__(name, age, gender)
        self.balance = 0

    def deposit(self, amount):
        self.amount = amount
        self.balance = self.balance + self.amount
        print("Account Balance Hasbeen Updated : Rs. ", self.balance)

    def withdraw(self, amount):
        self.amount = amount
        if self.amount > self.balance:
            print("Not Enough Balance | Balance Right Now : Rs. ", self.balance)
        else:
            self.balance = self.balance - self.amount
            print("Account Balance Hasbeen Updated | Balance Right Now : Rs. ", self.balance)

    def check_balance(self):
        self.customer_details()
        print("Account Balance : Rs. ", self.balance)
        

        
        
'''
Output Sequence ->

Run this program and create specific object with this type of format

example -

john = Bank('John', 25, 'Male') --> Hit Enter (To create object of Bank class)
john.deposit(10000) --> Hit Enter
john.withdraw(5000) --> Hit Enter
john.check_balance() --> Hit Enter
john.customer_details() --> Hit Enter


We can create such entries as much as we want


''' 
