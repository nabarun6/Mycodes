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
        
