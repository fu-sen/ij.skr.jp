## IchigoJam BASIC での基本

```
?"MJ GETS mj.15j.run/basic/
```

で表示します。\
末尾が / で終わる場合は通常 index.html を参照します。

IchigoJam BASIC で何かのメッセージを表示する時は

```
' (メッセージ)
```

とします。行頭 ' はコメント文 REM の短縮形で、\
IchigoJam BASIC は何も処理せずに表示するのみです。\
これがない場合、文字はじまりはダイレクト実行のコマンド、\
数字はじまりはプログラム入力の扱いとなります。\
これは手で入力している場合や、\
USB-シリアル を用いている場合と同じです。

```
?"MJ GETS mj.15j.run/basic/
```

？ は PRINT の省略形です。\
IchigoJam BASIC では末尾 " を省略できます。\
つまり上は MJ GETS ～ を表示させています。
