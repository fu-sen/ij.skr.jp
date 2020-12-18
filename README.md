## MixJuice コンテンツ サンプル

![画面表示](/screenshot.jpg)

各フォルダ（ディレクトリ）にある README.md は\
GitHub 上でこの文章を表示するためのものです。\
それ以外のファイルは実際の MixJuice 向けに用意されています。

IchigoJam BASIC の カナ は Shift_JIS の半角と同じですが、\
GitHub 上での表示は UTF-8 でないと正常に表示できません。\
そのため、ここでの MixJuice コンテンツは英文表記にしています。

### IchigoJam BASIC

次のコマンドで参照できます。

```
?"MJ GETS mj.15j.run/
```

または短縮 URL として

```
?"MJ GETS 15J.IN/M
```

実際の表示とソースを見比べて下さい。

2020年10月29日より、IchigoJam web で表示できるように、\
IchigoJam BASIC は `GETS` で表示するようになりました。\
さくらのレンタルサーバが HTTP/2 対応済みのため,\
**MixJuice は 1.2.2 以降** で動作となります。

### IchigoLatte

起動直後は一度次のコマンドを実行して下さい。\
文字化けした文字列が出てきて正常です。（lash> は入力する必要ありません）

```
lash>echo > uart;cat uart
```

次のコマンドで参照できます。（GET の代わりに GETS も使用可）

```
lash>echo MJ GET mj.15j.run/il/> uart;cat uart > .
```

### IchigonQuest

IchigonQuest そのものは MixJuice 非対応です。\
IJUtilities を用いて変換する事で公開できます。\
上位互換の MicJack が Kidspod; のプログラム送受に対応しています。

## イチゴジャム レシピ - MixJuice コンテンツ サンプル

[MixJuice/コンテンツの作成と公開 | イチゴジャム レシピ](https://15jamrecipe.jimdofree.com/mixjuice/%E3%82%B3%E3%83%B3%E3%83%86%E3%83%B3%E3%83%84%E3%81%AE%E4%BD%9C%E6%88%90%E3%81%A8%E5%85%AC%E9%96%8B/)

[さくらのレンタルサーバ](https://www.sakura.ne.jp/) は全プランで PHP 標準対応ですので、\
PHP を用いた MixJuice コンテンツのサンプルを実際に動作させています。\
詳細は上記ページ内を参照して下さい。

## 関連サイト

* MixJuice (公式) http://mixjuice.shizentai.jp/
* IchigoJam (公式) https://ichigojam.net/
* IchigoLatte (公式) http://ichigolatte.shizentai.jp/
* イチゴジャム レシピ (公開元) https://15jamrecipe.jimdofree.com/

## Powered by

[さくらのレンタルサーバ](https://www.sakura.ne.jp/) by [さくらインターネット](https://www.sakura.ad.jp/)
