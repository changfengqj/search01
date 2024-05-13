jQuery(document).ready(function($){
	$('a.confirm').on('click', function(){
		var href = $(this).attr("href");
    $.confirm({
      theme: 'bootstrap',
      closeIcon: true,
      animation: 'scale',
      backgroundDismiss: true,
      escapeKey: true,
      title: '确认此操作吗？',
      content: '此操作不可退回!',
      buttons: {
        确定: function(){
        	window.open(href,'_parent','',true);
          //return true;
        },
        取消: function(){
          //return false;
        }
      }
    });
    return false;
	});

  $('#select-jianli-form .confirm').on('click', function(){
    $.confirm({
      //icon: 'fa fa-question',
      theme: 'bootstrap',
      closeIcon: true,
      animation: 'scale',
      backgroundDismiss: true,
      escapeKey: true,
      title: '确认此操作吗？',
      content: '此操作不可退回!',
      buttons: {
        确定: function(){
          $("#select-jianli-form").submit();
        },
        取消: function(){

        }
      }
    });
    return false;
  });
  $('#join-form .confirm').on('click', function(){
    $.confirm({
      //icon: 'fa fa-question',
      theme: 'bootstrap',
      closeIcon: true,
      animation: 'scale',
      backgroundDismiss: true,
      escapeKey: true,
      title: '确认提交吗？',
      content: '提交后不可修改!',
      buttons: {
        确定: function(){
          $("#join-form").submit();
        },
        取消: function(){

        }
      }
    });
    return false;
  });
  $("#join-form .form-item-lianxidianhua input").focus(function(){
    $("#join-form .form-item-lianxidianhua").removeClass("red");
  });
  $('#join-form .form-item-lianxidianhua input').blur(function(){
    var tel = $("#join-form .form-item-lianxidianhua input").val();
    if (tel == null) {
      alert('请确认您的手机号码是否正确，如确认正确请忽略。');
      //$('#join-form .message-lianxidianhua .message-lianxidianhua').html('手机号不能为空！');
      $("#join-form .form-item-lianxidianhua").addClass("red");
      //return false;
    }
    if (!tel.match(/^(((1[3578][0-9]{1})|178)+\d{8})$/)) {
      alert('请确认您的手机号码是否正确，如确认正确请忽略。');
      //$('#join-form .message-lianxidianhua .message-lianxidianhua').html('手机号码格式不正确！');
      $("#join-form .form-item-lianxidianhua").addClass("red");
      //return false;
    }
  });
});

