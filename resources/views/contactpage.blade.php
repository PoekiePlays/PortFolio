<!DOCTYPE html>
<html>
<head>
</head>
<x-layout>
<body>

<div class="vak1">
<div class="vak">
  <form action="/action_page.php">
    <label for="lname">E-Mail</label>
    <input type="text" id="lname" name="lastname">

    <label for="country">Reden</label>
    <select id="country" name="country">
      <option value="australia">Buggs</option>
      <option value="canada">Account Support</option>
      <option value="usa">Feedback</option>
    </select>

    <label for="subject">Uitleg</label>
    <textarea id="subject" name="subject" style="height:80px"></textarea><br>
  
    <input type="submit" value="Verzend">
  </form>
</div>

</body>
</html>
</x-layout>
<style>
.vak1{
    display: flex;
    height: 90vh;
    justify-content: center;
    align-items: center
}
.vak{
    color: rgb(160, 162, 165);
    text-align: center;
    float: center;
    border-style: solid;
    border-color: rgb(0, 0, 0);
    border-radius: 8px;
    width: 700px;
    height: 400px;
    background-color: rgb(54, 57, 63);
    padding: 20px;
}
body {
    background-color: rgba(218, 218, 218, 0.286);
    background-image: url("Image/LoginBackground.png");
    font-family: 'Righteous', cursive;
    margin: 10px;
    background-repeat: no-repeat;
    overflow: hidden;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  color: White;
  background-color: rgba(0, 0, 0, 0.527);
  box-sizing: border-box;
  margin-top: 6px;
  border-style: solid;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: rgb(88,101,242);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>