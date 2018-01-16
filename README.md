# Travis CI Trial with PHP

このリポジトリは、Travis CIでPHPUnitを使ったユニットテストを実行するサンプルです。

## 使い方

1. このリポジトリをフォークします
1. Travis CIで自動テストの対象リポジトリに設定します
1. 以下のテストケースを `tests/CalcTest.php` に追加してみます
    ```php
        public function testAdd()
        {
            $calc = new Calc();
            $this->assertEquals($calc->add(1, 2), 3);
        }
    ```
1. プッシュすると自動テストが走ることを確認します
1. `Calc` には引き算も実装されているようですので、引き算のテストケースを追加します
    ```php
        public function testSub()
        {
            $calc = new Calc();
            $this->assertEquals($calc->add(3, 2), 1);
        }
    ```
1. プッシュすると、自動テストが1箇所失敗することがわかります
1. `src/Calc.php` のソースコードを直し、プッシュします
1. 今度はテストがすべて通るはずです
