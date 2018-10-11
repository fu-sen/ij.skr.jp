## IchigoLatte+MixJuice

IchigoLatte では基本的に次の 2 つだけです。

lash>**echo MJ GET(S) アドレス> uart;cat uart**

cat uart の場合は画面に出力します。

lash>**echo MJ GET(S) アドレス> uart;cat uart > .**

cat uart > . とした場合は、プログラムとして入れます。<br>
元々あったプログラムは上書き消去されます。

IchigoJam BASIC のように行頭 ' は不要です。
考慮すべき事として、プログラムの 1 行目行頭 // は<br>
ls で参照できるコメント文となります。
