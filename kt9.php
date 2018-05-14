<!DOCTYPE html>
<html>
<head>
  <title>Balance</title>
</head>
<body>

<?php

class BankAccount {
  private $accountNumber;
  private $balance;
  private $dateOpened;
  private $accountType;

  function __construct($accountNumber, $balance, $dateOpened, $accountType) {
    $this->accountNumber = $accountNumber;
    $this->balance = $balance;
    $this->dateOpened = $dateOpened;
    $this->accountType = $accountType;
  }
  function getAccount() {
    return "Account number: $this->accountNumber <br>
          Balance: $this->balance <br>
          Date opened: $this->dateOpened <br>
          Account type: $this->accountType <br><br>";
  }
}

$account1 = new BankAccount("A7652", "$500", "5/3/2000", "Checking");
$account2 = new BankAccount("B2311", "-$50", "1/2/2012", "Checking");
$account3 = new BankAccount("S2314", "$7500", "1/2/1994", "Savings");

echo $account1->getAccount() . "<br>" . $account2->getAccount() . "<br>" . $account3->getAccount();

?>

</body>
</html>
