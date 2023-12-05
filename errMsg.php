<?php

/**
 * 深刻なエラーの順番（降順）：C < A < D < B　
 *
 * A. `Warning: Undefined variable $i in XXX/index.php on line 334`
 * 警告：XXXのindex.php内で、334行目にある変数$iが初期化または代入ができていません。
 * プログラムは動作します。軽度です。
 *
 * B. `Fatal error: Uncaught Error: Call to undefined function hello() in XXX/index.php on line 15`
 * 致命的なエラー：到達していないエラー：XXXのindex.php内で、15行目において初期化または代入されていないhello関数が呼ばれようとしています。
 * プログラム動作中に停止します。重度です。
 * 
 * C. `Notice: Undefined index: xxxx in XXX/index.php on line 123`
 * 忠告：XXXのindex.php内で、123行目にxxxxという名前の未定義の配列キーが存在します。
 * プログラムは動作します。軽度です。
 * 
 * D. `Parse error: syntax error, unexpected token “)” in XXX/index.php on line 43`
 * 変換エラー：構文エラーです。XXXのindex.php内で、43行目において期待していない印の")"見つかりました。
 * 重度です。
 * プログラムが動作しません。重度です。
 */