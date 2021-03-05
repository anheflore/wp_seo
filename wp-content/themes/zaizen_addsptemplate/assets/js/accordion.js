/**
 * アコーディオンメニュー実装用
 *     ----
 *     必須設定：
 *     アコーディオンメニュー開閉切り替えボタン要素に任意の値のid属性を付与
 *     アコーディオンメニュー実装対象要素に"for-accordion"クラスを付与
 *     アコーディオンメニュー実装対象要素にdata属性"onclick"を付与（data-onclick="切り替えボタンのid属性の値"）
 *     --
 *     任意設定：
 *     アコーディオンメニュー実装対象要素にdata属性"display"を付与（data-display="オープン時、displayプロパティの値", 初期値＝'block'）
 *     アコーディオンメニュー実装対象要素にdata属性"interval"を付与（data-interval="オープン時、子要素表示のインターバル(ミリ秒)", 初期値＝30）
 *     ----
 */
window.addEventListener('DOMContentLoaded', () => {

    // accordion対象要素を全て取得
    const accordion_list = document.getElementsByClassName('for-accordion');

    // accordion対象を一つずつ処理
    for (let i = 0; i < accordion_list.length; i++) {
        // accordion対象 を取得
        const accordion = accordion_list[i];
        // クリック対象 を取得
        const onclick = accordion.dataset.onclick;
        // displayプロパティ設定 を取得
        let display; 
        if (accordion.dataset.display) {
            display = accordion.dataset.display
        } else {
            display = 'block';
        }
        // オープン時のインターバル設定 を取得
        let interval; 
        if (accordion.dataset.interval) {
            interval = accordion.dataset.interval;
        } else {
            interval = '30';
        }
        // アコーディオン対象要素の子要素を取得
        const children = accordion.children;
        for (let j = 0; j < children.length; j++) {
            children[j].style.display = 'none';
        }

        // onclickイベント設定
        const onclickElement = document.getElementById(onclick);
        onclickElement.onclick = () => {
            // 連続処理防止用のマーカーをセット
            const clicked = onclickElement.classList['value'].match('clicked')
            if (!clicked) {
                onclickElement.classList.add('clicked');
                // アコーディオンが開いているか判定
                const is_open =  onclickElement.classList['value'].match('accordion-open');
                if (is_open) {
                    // 開いている場合
                    for (let j = 0; j < children.length; j++) {
                        children[j].style.display = 'none';
                    }
                    onclickElement.classList.remove('accordion-open');
                    onclickElement.classList.remove('clicked'); // マーカーを削除
                } else {
                    // 閉じている場合
                    // 時間差で処理するための変数を用意
                    let timer = 0;
                    for (let j = 0; j < children.length; j++) {
                        setTimeout(() => {
                            children[j].style.display = display;
                        }, timer);
                        timer += Number(interval);
                    }
                    onclickElement.classList.add('accordion-open');
                    // 「インターバル時間」と「表示する要素数」をかけた数値分の時間（ミリ秒）後にマーカーを削除
                    setTimeout(() => {
                        onclickElement.classList.remove('clicked');
                    }, Number(interval) * children.length);
                }
            }
        }
    }
});
