## .php ファイル

[さくらのレンタルサーバ](https://www.sakura.ne.jp/) は全プランで PHP 標準対応ですので、\
PHP を用いた MixJuice コンテンツを実際に動作させています。

- [MixJuice/コンテンツの作成と公開 | イチゴジャム レシピ](https://15jamrecipe.jimdofree.com/mixjuice/%E3%82%B3%E3%83%B3%E3%83%86%E3%83%B3%E3%83%84%E3%81%AE%E4%BD%9C%E6%88%90%E3%81%A8%E5%85%AC%E9%96%8B/)
- [IchigoJam＋MixJuice で国際宇宙ステーションの位置を表示する。| ふうせん🎈 Fu-sen.](https://blog.balloon.im/2020/12/ichigojammixjuice-%E3%81%A7%E5%9B%BD%E9%9A%9B%E5%AE%87%E5%AE%99%E3%82%B9%E3%83%86%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%81%AE%E4%BD%8D%E7%BD%AE%E3%82%92%E8%A1%A8%E7%A4%BA%E3%81%99%E3%82%8B/)

___

### IchigoJam web

Ichigojam web で動作するようにする場合、\
`Access-Control-Allow-Origin: *` をヘッダに加える必要があります。

`.php` では次の 1 行を最初ところで加えて下さい。

```
header("Access-Control-Allow-Origin: *");
```

mj.15j.run は主に .html で出力しているため、\
Apache の `.htaccess` でドメイン内全体に適用するよう設定してあります。

<https://github.com/fu-sen/mj.15j.run/blob/master/.htaccess#L3>
