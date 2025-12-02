function setGreeting(){
  let hour = new Date().getHours();
  let text = "Welcome";

  if(hour < 12) text = "Good Morning";
  else if(hour < 17) text = "Good Afternoon";
  else text = "Good Evening";

  document.getElementById("greetingText").innerText = 
    text + " 👋 | Online Registration Portal";
}
setGreeting();

$("#regForm").submit(function(){
  $("#submitBtn span").text("Registering...");
  $(".spinner").show();
  return true;
});
