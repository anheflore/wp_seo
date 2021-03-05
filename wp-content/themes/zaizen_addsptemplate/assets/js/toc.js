// -- スムーズスクロール -- //
jQuery(document).ready(function($){
    $('a[href^="#"]').click(function() {
        let menu_height = $('#header__menu').outerHeight();
        console.log(menu_height);
        var href= $(this).attr('href');
        var speed = 400;
        var target = $(href == '#' || href == '' ? 'html' : href);
        var position = target.offset().top - menu_height - 10;
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });
}); // -- END スムーズスクロール -- //



// -- 目次設定 -- //
window.addEventListener('DOMContentLoaded', () => {

    // 目次項目設定準備
    const article  = document.getElementById('article'); // 記事取得
    const contents = article.childNodes;                 // 記事の子ノード
    let sub_titles = [];                                 // 目次用テキスト格納用
    if (contents.length) {
        for (let i = 0; i < contents.length; i++) {
            if (contents[i].tagName && contents[i].tagName.toLowerCase() === 'h3') {
                contents[i].classList.add('article-h3');
                sub_titles.push(contents[i]);
            }
            if (contents[i].tagName && contents[i].tagName.toLowerCase() === 'h4') {
                contents[i].classList.add('article-h4');
                sub_titles.push(contents[i]);
            }
        }
    }
    const toc            = document.createElement('div');  // 目次コンテナ
    const toc_title      = document.createElement('h3');   // 目次タイトル
    const toc_btn        = document.createElement('div');  // 目次開閉ボタン
    const toc_btn_parts1 = document.createElement('span'); // 目次開閉ボタンばつ印
    const toc_btn_parts2 = document.createElement('span'); // 目次開閉ボタンばつ印
    const toc_list       = document.createElement('ul');   // 目次リスト
    const toc_line       = document.createElement('span'); // 目次装飾用
    toc.classList.add('article-toc');
    toc_title.classList.add('article-toc__title');
    toc_title.innerText = '目次';
    toc_btn.classList.add('article-toc__btn');
    toc_btn.id = 'accordion_btn';
    toc_btn_parts1.classList.add('article-toc__btn-parts');
    toc_btn_parts1.classList.add('article-toc__btn-parts--1');
    toc_btn_parts2.classList.add('article-toc__btn-parts');
    toc_btn_parts2.classList.add('article-toc__btn-parts--2');
    toc_btn.appendChild(toc_btn_parts1);
    toc_btn.appendChild(toc_btn_parts2);
    toc_list.classList.add('article-toc__list', 'for-accordion');
    toc_list.dataset.onclick = 'accordion_btn';
    toc_list.dataset.interval = '10';
    toc_line.classList.add('article-toc__line');
    toc_list.appendChild(toc_line);

    // 目次項目設定
    let h3_count = 1;
    for (let i = 0; i < sub_titles.length; i++) {

        const sub_title = sub_titles[i];
        sub_title.id = 'toc-target' + i; // サブタイトルにID属性を追加

        const toc_list_item      = document.createElement('li'); // 目次項目
        const toc_list_item_link = document.createElement('a');  // 目次項目のリンク先
        toc_list_item.classList.add('article-toc__list-item');
        toc_list_item_link.classList.add('article-toc__list-item-link');
        toc_list_item_link.href = '#toc-target' + i;

        let sub_title_text;
        if (sub_title.tagName.toLowerCase() === 'h3') {
            sub_title_text = '<span class="article-toc__list-item-link--h3-num">' + h3_count + '.</span>' + sub_title.textContent;
            toc_list_item_link.classList.add('article-toc__list-item-link--h3');
            h3_count++;
        }
        else if (sub_title.tagName.toLowerCase() === 'h4') {
            sub_title_text = sub_title.textContent;
            toc_list_item_link.classList.add('article-toc__list-item-link--h4');
        }

        toc_list_item_link.innerHTML = sub_title_text;
        toc_list_item.appendChild(toc_list_item_link);
        toc_list.appendChild(toc_list_item);
    }
    toc.appendChild(toc_title);
    toc.appendChild(toc_btn);
    toc.appendChild(toc_list);

    // 目次挿入
    if (toc) {
        const tocText = toc.outerHTML; // 作成した要素を文字列に変換 
        sub_titles[0].insertAdjacentHTML('beforebegin', tocText); // 最初のサブタイトルの上に目次を挿入
    }
}); // -- END 目次設定 -- //



// -- 目次開閉ボタン表示切り替え -- //
window.addEventListener('click', () => {

    const btn       = document.getElementById('accordion_btn');
    const is_open   = btn.classList['value'].match('accordion-open');
    const btn_parts = btn.children;

    if (is_open) {
        btn_parts[0].style.transform = 'translateX(-50%) translateY(-50%) rotate(-45deg)';
        btn_parts[1].style.transform = 'translateX(-50%) translateY(-50%) rotate(-135deg)';
    }
    else {
        btn_parts[0].style.transform = 'translateX(-50%) translateY(-50%) rotate(90deg)';
        btn_parts[1].style.transform = 'translateX(-50%) translateY(-50%)';
    }

}); // -- END 目次開閉ボタン表示切り替え -- //
