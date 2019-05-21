## MixJuice コンテンツ サンプル

![画面表示](/screenshot.jpg)

各フォルダ（ディレクトリ）にある README.md は\
GitHub 上でこの文章を表示するためのものです。\
それ以外のファイルは実際の MixJuice 向けに用意されています。

IchigoJam BASIC の カナ は Shift_JIS の半角と同じですが、\
GitHub 上での表示は UTF-8 でないと正常に表示できません。\
そのため、ここでの MixJuice コンテンツは英文表記にしています。

### IchigoJam BASIC

次のコマンドで参照できます。（GET の代わりに GETS も使用できます）

```
?"MJ GET ijmj.eu.org/
```

または

```
?"MJ GETS 15j.run/M
```

実際の表示とソースを見比べて下さい。

### IchigoLatte

起動直後は一度次のコマンドを実行して下さい。\
文字化けした文字列が出てきて正常です。（lash> は入力する必要ありません）

```
lash>echo > uart;cat uart
```

次のコマンドで参照できます。（GET の代わりに GETS も使用できます）

```
lash>echo MJ GET ijmj.eu.org/il/> uart;cat uart > .
```

### IchigonQuest

IchigonQuest そのものは MixJuice 非対応です。\
IJUtilities を用いて変換する事で公開できます。\
上位互換の MicJack が Kidspod; のプログラム送受に対応しています。

### 関連サイト

* MixJuice (公式) http://mixjuice.shizentai.jp/
* IchigoJam (公式) https://ichigojam.net/
* IchigoLatte (公式) http://ichigolatte.shizentai.jp/
* イチゴジャム レシピ (公開元) https://15jamrecipe.jimdo.com/

