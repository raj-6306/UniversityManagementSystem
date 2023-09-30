	function valid_student(frm){
	
	if(frm.st_name.value==""){
	alert("Enter Name");
	frm.st_name.focus();
	return false;
	}
	
	if(frm.st_father.value==""){
	alert("Enter Father Name");
	frm.st_father.focus();
	return false;
	}
	if(frm.st_phone.value==""){
	alert("Enter Phone No.");
	frm.st_phone.focus();
	return false;
	}
	if(frm.st_phone.value.length<10){
	alert("Enter 10 digit Phone Number");
	frm.st_phone.focus();
	return false;
	}
	var email=frm.st_email.value;
	if(email==""){
	alert("Enter Email");
	frm.st_email.focus();
	return false;
	}
	if(email.indexOf('@')==-1){
	alert("Email formate is incorrect include @ symbol");
	frm.st_email.focus();
	return false;
	}
	if(email.indexOf('@')==0||email.indexOf('@')==(email.length-1)){
	alert("Incorrect email formate @ Not use first and end");
	frm.st_email.focus();
	return false;
	}
	var c=0;
	for(var i=0;i<=email.length;i++){
              if(email.charAt(i)=="@")
                c++;
	}
	if(c>1){
	alert("Email formate is incorrect only one @ symbol allowed");
	frm.st_email.focus();
	return false;
	}
	if(frm.st_gen[0].checked==false && frm.st_gen[1].checked==false){
	alert("select Gender");
	frm.st_gen[0].checked=true;
	return false;
	}
	
	var chk=false;
	var frm_len=frm.elements.length;
	for(var i=0;i<frm_len;i++){
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
	if(frm.st_dob.value==""){
	alert("Enter Date Of Birth ");
	frm.st_dob.focus();
	return false;
	}
	if(frm.st_dob.value.length<10){
	alert("Enter valid Date Of Birth");
	frm.st_dob.focus();
	return false;
	}/*
	if(frm.st_dob.value.indexOf('/')!=2 && frm.st_dob.value.indexOf('/')!=5){
	alert("Please use /symbol , And enter correct Date of Birthsymbol ");
	frm.st_dob.focus();
	return false;
	}*/
	if(frm.st_doa.value==""){
	alert("Enter Date Of Addmission ");
	frm.st_doa.focus();
	return false;
	}
	if(frm.st_doa.value.length<10){
	alert("Enter valid Date Of Addmission");
	frm.st_doa.focus();
	return false;
	}/*
	if(frm.st_doa.value.indexOf('/')!=2 && frm.st_doa.value.indexOf('/')!=5){
	alert("Please use /symbol , And enter correct Date of Birthsymbol ");
	frm.st_doa.focus();
	return false;
	} */
	
	if(frm.st_course.value==0){
	alert("select Course");
	frm.st_course.focus();
	return false;
	}
	if(frm.st_cat.value==0){
	alert("select Category");
	frm.st_cat.focus();
	return false;
	}
	if(frm.st_country.value==0){
	alert("select Country");
	frm.st_country.focus();
	return false;
	}
	if(frm.st_state.value==0){
	alert("select State");
	frm.st_state.focus();
	return false;
	}
	if(frm.st_pincode.value==""){
	alert("Enter Pin code.");
	frm.st_pincode.focus();
	return false;
	}
	if(frm.st_pincode.value.length<6){
	alert("Enter 6 digit Pincode Number");
	frm.st_pincode.focus();
	return false;
	}
	if(frm.st_image.value==""){
	alert("Select Image0");
	frm.st_image.focus();
	return false;
	}
	if(frm.st_address1.value==""){
	alert("Enter Local Address");
	frm.st_address1.focus();
	return false;
	}
	if(frm.st_address2.value==""){
	alert("Enter Parmanent Address also");
	frm.st_address2.focus();
	return false;
	}
	return true;
}

/////////////////Function For Delete///////////////////////
function student_delete(st_id1){
	if(confirm("Do you Want to Delete")){
		this.document.student_view.act.value="delete_student";
		this.document.student_view.st_id.value=st_id1;
		this.document.student_view.submit();
	}
}
///////////////////////printOut function////////////////////
function printOut(){
	window.print();	
}
/////////////////////////Select ALL Function////////////////
function selectAll(obj){
	var frm=this.document.student_view;
	var frm_len=frm.elements.length;
	for(var i=0;i<=frm_len;i++){
		if(frm.elements[i].type=="checkbox"){
		if(frm.elements[i].name=="st_multi_id[]"){
			frm.elements[i].checked=obj.checked;	
		}
		}
	}
}
//////////////////////Student Delete Function/////////////////////
function student_multi_delete(){
	if(confirm("Do you Want to Delete All Selected Record.?")){
		this.document.student_view.act.value="student_multi_delete";
		this.document.student_view.submit();
	}
}
///////////////////////Vlidation for Fees//////////////////////////
function valid_student_fees(){
	//alert("hello");
	/*if(frm.st_amount.value==""){
	alert("Enter Amount");
	return false;
	}*/
	let total=parseInt(document.getElementById("st_total").value);
	let amt=parseInt(document.getElementById("st_amount").value);
	// alert(total)
 if(amt>total){
	 //alert(frm.st_total.value);
 	alert("Enter valid Amount");
    return false;
  	}
}
///////////////////////Delete Fees////////////////
function fees_delete(fees_id1){
	if(confirm("Do you Want to Delete")){
		this.document.student_fees.act.value="fees_delete";
		this.document.student_fees.st_id.value=fees_id1;
		this.document.student_fees.submit();
	}
}
////////////////////fees delete////////////////////
function delete_exam(exam){
	// alert(exam)
	if(confirm("Do you Want to Delete")){
		this.document.exam_view.act.value="delete_exam";
		this.document.exam_view.exam_id.value=exam;
		this.document.exam_view.submit();
		
	}
}
////////////////////////Exam Validation///////////////////////////
function valid_exam(ex){
if(ex.ex_title.value==""){
	alert("Enter Exam Title");
	ex.ex_title.focus();
	return false;
	}
	if(ex.ex_course.value==0){
	alert("Select Exam Course");
	ex.ex_course.focus();
	return false;
	}
	if(ex.ex_subject.value==0){
	alert("Select Exam Subject");
	ex.ex_subject.focus();
	return false;
	}
	if(ex.ex_date.value==""){
	alert("Select Exam Date");
	ex.ex_date.focus();
	return false;
	}
	if(ex.ex_shift[0].checked==false && ex.ex_shift[1].checked==false){
	alert("select Exam Shift");
	ex.ex_shift[0].checked=true;
	return false;
	}
	
	return true;
}
//////////////////////Dynamic states//////////////
function find_state(txt){
var xhttp=new XMLHttpRequest();
xhttp.onreadystatechange=function(){
if(xhttp.readyState==4 && xhttp.status==200)
document.getElementById('st_state').innerHTML=xhttp.responseText;
}
xhttp.open("get","lib/ajax_state.php?q="+txt,true);
xhttp.send();
}
///////////////////////Dynamic Subject /////////////
function find_sub(txt){
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function(){
		if(xhttp.readyState==4 && xhttp.status==200)
		document.getElementById('subject').innerHTML=xhttp.responseText;
	}
	xhttp.open('get','lib/ajax_sub.php?q='+txt,true);
	xhttp.send();
}