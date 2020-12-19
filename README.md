## MixJuice コンテンツ サンプル

![画面表示](/screenshot.jpg)

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

___

## robots.txt

`mj.15j.run` は完全に MixJuice での参照向けですので、\
Google などの検索エンジンクローラーに収集してもらう意味がありません。\
そのため、完全にクローラーの参照を拒否させています。

```
User-agent: *
Disallow: /
```

___

## .htaccess

次の記載があります。

- Not Found - MixJuice の考慮で 404.shtml で表示させています。
- IchigoJam web の対処 - CORS の対応を行っています。
- mj.15j.run 以外で参照した時の対処
- 大文字を小文字に変換 - この方法では変換する文字数が多いとサーバエラーになります。

___

## .git-ftp-inore

[git-ftp](https://github.com/git-ftp/git-ftp) でアップロードしないファイルを指定しています。\
IchigoJam BASIC＋MixJuice や IchigoLatte＋MixJuice で参照した場合の意図しない表示を避けるため、\
参照で不具合となるファイルを除外させています。

___

## 関連サイト

* MixJuice (公式) http://mixjuice.shizentai.jp/
* IchigoJam (公式) https://ichigojam.net/
* IchigoLatte (公式) http://ichigolatte.shizentai.jp/
* イチゴジャム レシピ (公開元) https://15jamrecipe.jimdofree.com/

___

## Powered by

[さくらのレンタルサーバ](https://www.sakura.ne.jp/) by [さくらインターネット](https://www.sakura.ad.jp/)
