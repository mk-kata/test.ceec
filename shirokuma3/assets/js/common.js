/**
 * common.js
 */

/**
 * メインビジュアルの高さ取得
 */
(function () {
	const setFillHeight = () => {
		const vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', `${vh}px`);
	};

	let vw = window.innerWidth;

	window.addEventListener('resize', () => {
		if (vw === window.innerWidth) {
			// 画面の横幅にサイズ変動がないので処理を終える
			return;
		}

		// 画面の横幅のサイズ変動があった時のみ高さを再計算する
		vw = window.innerWidth;
		setFillHeight();
	});
	setFillHeight();
})();

/**
 * PCグローバルメニューサブメニュー展開
 */
// .js-has-childクラスがついている要素を取得
var hasChildElements = document.querySelectorAll('.js-has-child');

// マウスオーバー時の処理
function handleMouseOver() {
  // マウスオーバーされた要素の子要素で.p-gnav__childクラスがついているものに.is-openクラスを追加
  var childElements = this.querySelectorAll('.p-gnav__child');
  childElements.forEach(function(childElement) {
    childElement.classList.add('is-open');
  });
}

// マウスアウト時の処理
function handleMouseOut() {
  // マウスオーバーされた要素の子要素で.p-gnav__childクラスがついているものから.is-openクラスを削除
  var childElements = this.querySelectorAll('.p-gnav__child');
  childElements.forEach(function(childElement) {
    childElement.classList.remove('is-open');
  });
}

// 各要素にイベントリスナーを追加
hasChildElements.forEach(function(element) {
  element.addEventListener('mouseover', handleMouseOver);
  element.addEventListener('mouseout', handleMouseOut);
});


/**
 * SPメニュー
 */
var _click = (window.ontouchstart === undefined)? 'click' : 'touchend';

const html = document.querySelector('html');
const menu_sp = document.querySelector('.p-sp-menu');


//SPメニュー展開時に背景スクロールさせない場合
function add_sp_bg_fixed() {
  scrollpos = window.scrollY;
  html.classList.add('js-sp-bg-fixed');
  html.style.top = scrollpos * -1 + 'px';
}

function remove_sp_bg_fixed() {
  html.classList.remove('js-sp-bg-fixed');
  window.scrollTo(0, scrollpos);
}

document.querySelector('#js-menu-button').addEventListener(_click,function(){
	this.classList.toggle('is-open');
	menu_sp.classList.toggle('is-open');

	//SPメニュー展開時に背景スクロールさせない場合
	if (this.classList.contains('is-open')) {
	  if (!html.classList.contains('js-sp-bg-fixed')) {
		add_sp_bg_fixed();
	  }
	} else {
	  remove_sp_bg_fixed();
	}

},false);


//SP判定（ウィンドウサイズを取得）
var sp_flag = false;
const mediaQueryList = window.matchMedia('(min-width: 992px)');
const listener = (event) => {
  if (event.matches) {
    sp_flag = false;

    //SPメニュー展開時に背景スクロールさせない場合
    scrollpos = window.scrollY;
    remove_sp_bg_fixed();

  } else {
    sp_flag = true;
  }
};
mediaQueryList.addEventListener("change", listener);
listener(mediaQueryList);



/**
 * ページ内遷移
 */
(function () {
	setTimeout(() => {
		const anchorLinks = Array.prototype.slice.call(document.querySelectorAll('a[href^="#"]'));
		const header = document.querySelector('.l-header');

		anchorLinks.forEach(link => {
			link.addEventListener('click', e => {
				e.preventDefault();
				const targetElement = document.querySelector(link.hash);

				if (targetElement) {
					const offsetTop = window.scrollY + targetElement.getBoundingClientRect().top;

					window.scrollTo({
						top: offsetTop - header.offsetHeight,
						behavior: "smooth"
					});
				}
			});
		});
	}, 1);
})();

/**
 * URLにアンカーリンクが含まれていたらにそのアンカーへ移動
 */
(function () {
	setTimeout(() => {
		const url = window.location.href;

		if (url.indexOf("#") !== -1) {
			const headerHeight = document.querySelector('.l-header').offsetHeight;
			const anchor = url.split("#");
			const target = document.getElementById(anchor[anchor.length - 1]);

			if (target) {
				const position = Math.floor(target.getBoundingClientRect().top + window.scrollY) - headerHeight;
				window.scrollTo({ top: position, behavior: 'smooth' });
			}
		}
	}, 500);
})();


(function ($) {
	$(document).ready(function () {
		/**
		 * Waves設定
		 */
		Waves.init();
		Waves.attach('.js-waves');
		Waves.attach('.js-waves-light', ['waves-light']);
		Waves.attach('.p-button', ['waves']);

		/**
		 * カテゴリーバータブ切り替え
		 */
		$('.js-tab').on('click', function () {
			$('.js-tab, .js-panel').removeClass('is-active');
			$(this).addClass('is-active');
			var index = $('.js-tab').index(this);
			$('.js-panel').eq(index).addClass('is-active');
		});

		/**
		 * ページトップボタン 画面スクロールで表示/非表示
		 */
		var show_flug = false;
		var top_btn = $('#pagetop');
		top_btn.css('bottom', '-120px');
		var show_flug = false;
		$(window).scroll(function () {
			if ($(this).scrollTop() > 1000) {
				if (show_flug == false) {
				show_flug = true;
				top_btn.css('display', 'block');
				top_btn.stop().animate({'bottom' : '30px'}, 500);
				}
			} else {
				if (show_flug) {
				show_flug = false;
				top_btn.stop().animate({'bottom' : '-120px'}, 500);
				}
			}
		});
		//画面トップへスムーズスクロール
		$('#pagetop').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 500);
			return false;
		});

	});
})(jQuery);