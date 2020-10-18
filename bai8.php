<?php

$transactions = array(
      array(
            "debit" => 2,
            "credit" => 3
      ),
      array(
            "debit" => 15,
            "credit" => 14
      )
);
$transactions[0]["mount"] = abs($transactions[0]["credit"] - $transactions[0]["debit"]);
$transactions[1]["mount"] = abs($transactions[1]["credit"] - $transactions[1]["debit"]);

echo "<pre>";
print_r($transactions);
echo "</pre>";
