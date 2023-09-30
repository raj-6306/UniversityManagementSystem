function valid_student(frm){
var frm_len=frm.elements.length;
	for(var i=0;i<frm_len;i++){
/*
        if(frm.elements[i].type=="text"){
			if(frm.elements[i].value.trim()==""){
				var name=frm.elements[i].name;
				let arr=name.split("_");
				 let res=name.replace(arr[0],"Student");
				alert("Enter"+res);
				//frm.name.focus();
				return false;
			}
		}
	}/*
		var chk=false;
	if(frm.elements[i].type=="checkbox"){
			if(frm.elements[i].name=="st_qual[]"){
				if(frm.elements[i].checked==true){
					chk=true;
					break;
				}
			}
		}
	}
	if(chk==false){
		alert("select Qualification");
		frm.st_qual.focus();
		return false;
	} 
	if(frm.elements[i].type=="radio"){
			if(frm.elements[i].checked==false){
				var name=frm.elements[i].name;
				let arr=name.split("_");
				let res1=name.replace(arr[0],"Student ");
				let res2=res1.split("_");
				if(arr[1]=="gen"){
				 let res3=name.replace(arr[1],"Gender ");
				 }
				 let res=res3.replace(arr[0],res2[0]);
				 alert(res4);
				//frm.name.focus();
				return false;
				 }
			}
	*/
	if(frm.elements[i].type=="select-one"){
	 	if(frm.elements[i].value=="0"){
			var name=frm.elements[i].name;
			let arr1=name.split("_");
			let res1=name.replace(arr1[0],"Student");
			let res2=res1.split("_");
			if(arr1[1]=="course"){
			var res3= name.replace(arr1[1],"Course");
			}else if(arr1[1]=="cat"){
				var res3= name.replace(arr1[1],"Categroy");
			}else if(arr1[1]=="country"){
				var res3= name.replace(arr1[1],"Country");
			}else{
				var res3= name.replace(arr1[1],"State");
			}
			//let r=arr.join(res1,res3);
			//let r=res3.replace(arr1[0],res2[0]);
			alert(r);
			return false;
		}
	}
	
}	
return true;
}