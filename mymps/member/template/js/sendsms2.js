function sendmsgbutton(){
	if ($("#mobile").val()=="") {
		alert("�������ֻ�����");
		$("#mobile").focus();
		return;
	}
	
	var aj = $.ajax( {
    url:'../sendsms.php',  
     data:{  phonenum : $("#mobile").val()  },  
     type:'post',  
     cache:false,
     dataType:'json',
     success:function(data) {  
         if($.trim(data) =="success" ){  
 
         }else{  

         }  
      },  
      error : function() {  

      }  
	});
	var test = {
       node:null,
       count:120,
       start:function(){
          if(this.count > 0){
			this.count--;
            this.node.value = this.count + "�������»�ȡ";
             var _this = this;
             setTimeout(function(){
                _this.start();
             },1000);
          }else{
             this.node.removeAttribute("disabled");
			 this.node.setAttribute("class","disabled");
             this.node.value=("�ٴη���");
             this.count = 120;
          }
       },
       //��ʼ��
       init:function(node){
          this.node = node;
          this.node.setAttribute("disabled",true);
		  this.node.setAttribute("class","disable");
          this.start();
       }
    };
    var btn = document.getElementById("sendmsg");      
    test.init(btn);
}