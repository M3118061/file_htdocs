<?php
require_once 'BankAccount.php';
require_once '../phpunit/src/Framework/TestCase.php';

class TestBankAccount extends PHPUnit\Framework\TestCase
{
    protected $ba;

    protected function setUp(): void
    {
        $this->ba = new BankAccount;
    }

    //Tes Saldo Awalnya Nol
    public function testBalanceSaldoAwalNol(): void
    {
        //untuk rekening bank baru
        $ba = new BankAccount;

        //untuk balance
        $balance = $ba->getBalance();

        //untuk mendapatkan 0
        $this->assertEquals(0, $balance);
    }

    //Tes Saldo Tidak Menjadi Negatif(withdrawMoney)
    public function testBalanceSaldoTidakNegatif(): void
    {
        try {
            $this->ba->withdrawMoney(1);
        } catch (BankAccountException $e) {
            $this->assertEquals(0, $this->ba->getBalance());

            return;
        }

        $this->fail();
    }

    //Tes Saldo Tidak Menjadi Negatif(depositMoney)
    public function testBalanceSaldoTidakNegatif2(): void
    {
        try {
            $this->ba->depositMoney(-1);
        } catch (BankAccountException $e) {
            $this->assertEquals(0, $this->ba->getBalance());

            return;
        }

        $this->fail();
    }
}
