

$(function(){

	$("#confirmBtn").on("click", function(e){
		e.preventDefault();

		let sei_kan 		= $("#00N5i00000IvWXt").val();
		let mei_kan 		= $("#00N5i00000IvWYX").val();

		let sei_kana 		= $("#00N5i00000IvWYc").val();
		let mei_kana 		= $("#00N5i00000IvWYm").val();

		let company 		= $("#company").val();
		let company_kana 	= $("#00N5i00000IyKAD").val();

		let add1	 		= $("#00N5i00000IyJVP").val();
		let add2 			= $("#00N5i00000IyJVK").val();
		let add3	 		= $("#00N5i00000Ixtys").val();

		let email	 		= $("#email").val();

		let tel 			= $("#00N5i00000Ixtz7").val();

		let naiyou	 		= false;
		$(".check-list input").each(function(){
			if($(this).prop("checked")) {
				naiyou = true;
			}
		})

		let nouki	 		= $("#00N5i00000IyTfB").val();

		let inquiry 		= $("#00N5i00000IvWbq").val();



		let error = false;


		$(".form-box.input .error").remove();


		if(sei_kan == "") {
			$(".form-box.input tr:nth-of-type(1) td").append("<span class=\"error\">姓が未入力です。</span>");
			error = true;
		}
		if(mei_kan == "") {
			$(".form-box.input tr:nth-of-type(1) td").append("<span class=\"error\">名が未入力です。</span>");
			error = true;
		}

		if(sei_kana == "") {
			$(".form-box.input tr:nth-of-type(1) td").append("<span class=\"error\">セイが未入力です。</span>");
			error = true;
		}
		if(mei_kana == "") {
			$(".form-box.input tr:nth-of-type(1) td").append("<span class=\"error\">メイが未入力です。</span>");
			error = true;
		}

		if(company == "") {
			$(".form-box.input tr:nth-of-type(2) td").append("<span class=\"error\">会社名が未入力です。</span>");
			error = true;
		}
		if(company_kana == "") {
			$(".form-box.input tr:nth-of-type(2) td").append("<span class=\"error\">フリガナが未入力です。</span>");
			error = true;
		}

		if(add1 == "") {
			$(".form-box.input tr:nth-of-type(3) td").append("<span class=\"error\">郵便番号が未入力です。</span>");
			error = true;
		}
		if(add2 == "") {
			$(".form-box.input tr:nth-of-type(3) td").append("<span class=\"error\">都道府県市区町村が未入力です。</span>");
			error = true;
		}
		if(add3 == "") {
			$(".form-box.input tr:nth-of-type(3) td").append("<span class=\"error\">番地が未入力です。</span>");
			error = true;
		}

		let pattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;

		if(email == "") {
			$(".form-box.input tr:nth-of-type(4) td").append("<span class=\"error\">メールアドレスが未入力です。</span>");
			error = true;
		}
		else if(pattern.test(email) == false) {
			$(".form-box.input tr:nth-of-type(4) td").append("<span class=\"error\">メールアドレスの形式が正しくありません。</span>");
			error = true;
		}

		if(tel == "") {
			$(".form-box.input tr:nth-of-type(5) td").append("<span class=\"error\">ご連絡先電話番号が未入力です。</span>");
			error = true;
		}

		if(naiyou == "") {
			$(".form-box.input tr:nth-of-type(6) td").append("<span class=\"error\">見積依頼業務内容が未選択です。</span>");
			error = true;
		}

		if(nouki == "") {
			$(".form-box.input tr:nth-of-type(7) td").append("<span class=\"error\">ご希望納期が未選択です。</span>");
			error = true;
		}



		if(!error) {
			$(".cell-name").text(sei_kan + mei_kan);
			$(".cell-name_kana").text(sei_kana + mei_kana);

			$(".cell-company").text(company);
			$(".cell-company_kana").text(company_kana);

			$(".cell-address").text("〒" + add1 + " " + add2 + " " + add3);

			$(".cell-email").text(email);

			$(".cell-tel").text(tel);

			let naiyou_text = "";
			$(".check-list input").each(function(){
				if($(this).prop("checked")) {
					naiyou_text += $(this).next().text() + ", ";
				}
			});
			naiyou_text = naiyou_text.slice(0, -2);

			$(".cell-naiyou").text(naiyou_text);
			
			$(".cell-nouki").text(nouki);

			$(".cell-inquiry").text(inquiry);



			$(".form-box.input").hide();
			$(".form-box.confirm").show();

			$(".flow > div").removeClass("current");
			$(".flow > div:nth-of-type(2)").addClass("current");
		}

		$(window).scrollTop($(".c-box02").position().top - 100);

		return false;

	})


	$("#backBtn").on("click", function(e){
		e.preventDefault();
		$(".form-box.confirm").hide();
		$(".form-box.input").show();


		return false;
	});


});