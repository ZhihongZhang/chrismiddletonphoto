			

		</div>

		<?php wp_footer(); ?>
	</body>
	<script>
		$()
		{

			var i = 0;
			$(window).scrollLeft(0);
			var width = ($(".wl-gallery").width() + 80);
			var scroll_x = $("#content").width();
			var arr = [];
			arr = $(".entry-content").find(".wl-gallery");
			var sum = Math.round(arr.length / 3);
			$(".menu-item-object-custom>a").click(function () {
				var name = $(this).text();
				$("." + name).attr("style", "display:none");
				$("." + name).each(function (i) {
					$(this).removeClass("wl-gallery");
				});
				arr = $(".entry-content").find(".wl-gallery");
				console.log(arr.length);
				sum = Math.round(arr.length / 3);
				$("#right_scroll").off();
				$("#left_scroll").off();
				resize(arr, sum);

				$("." + name).each(function (i) {
					$(this).addClass("wl-gallery");
				});
			});

			resize(arr, sum);

			function resize(arr, sum) {
				$(arr).each(function (i) {
					$(this).attr("style", "position:absolute;left:" + (i * width + 80) + "px;");
				});

				$("#right_scroll").on("click", function () {
					if (i < (sum - 1)) {
						i++;
						$(window).scrollLeft(i * scroll_x);
					}
				});

				$("#left_scroll").on("click", function () {
					if (i > 0) {
						i--;
						$(window).scrollLeft(i * scroll_x);
					}
				});
			};


			function isValidEmailAddress(emailAddress) {
				var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
				return pattern.test(emailAddress);
			};

			$("#swpsmtp_settings_form").submit(function (e) {

				e.preventDefault();

				var c_name = $("#swpsmtp_name").val();
				var c_email = $("#swpsmtp_email").val();
				var c_message = $("#swpsmtp_message ").val();
				var responseMessage = $('#ajax-response');

				if (( c_name == "" || c_email == "" || c_message == "") || (!isValidEmailAddress(c_email) )) {
					responseMessage.fadeIn(500);
					responseMessage.html('<i class="fa fa-warning"></i> Check all fields.');
				}

				else {
					$.ajax({
						type      : "POST",
						url       : "/wp-content/themes/simply-read/contactForm.php",
						dataType  : 'json',
						data      : {
							swpsmtp_name   : c_name,
							swpsmtp_email  : c_email,
							swpsmtp_message: c_message
						},
						beforeSend: function () {
							$('#settings-form-submit').empty();
							$('#settings-form-submit').append('<i class="fa fa-cog fa-spin"></i> Wait...');
						},
						success   : function (result) {
							if (result.sendstatus == 1) {
								responseMessage.html(result.message);
								responseMessage.fadeIn(500);
								$('#swpsmtp_settings_form').fadeOut(500);
							} else {
								$('#settings-form-submit').empty();
								$('#settings-form-submit').append('<i class="fa fa-retweet"></i> Try again.');
								responseMessage.html(result.message);
								responseMessage.fadeIn(1000);
							}
						}
					});
				}

				return false;

			});


		}

	</script>

</html> <!-- end of site. what a ride! -->