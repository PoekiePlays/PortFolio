<x-layout>
    <article>
        <header> 
        </header> 
            <div class="vak1">
            <div class="vak">
        <main>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" autofocus value="{{ old('title') }}"><br>
                @error('title')
                <div class='text-red-500'>{{$message}}</div>
                @enderror
                <label for="subject">Beschrijving:</label>
                <input type="text" name="subject" id="subject" value="{{ old('subject') }}"> <br>
                @error('subject')
                <div class='text-red-500'>{{$message}}</div>
                @enderror
                <label for="content">Content:</label>
                <textarea name="content" id="content" value="{{ old('content') }}" style="height:80px"></textarea><br>

                <label for="subject">Image:</label><br>
                <input type="file" name="image" id="image" accept="image/*" value="{{ old('image') }}"> <br><br>
                @error('image')
                <div class='text-red-500'>{{$message}}</div>
                @enderror
                <input type="submit" name="btnsubmit" value="Verstuur post">
        </main> 
        <footer>
        
        </footer>      
    </article>
</x-layout>

<style>
body {
background-color: rgb(0)
font-family: 'Righteous', cursive;
margin: 10px;
background-repeat: no-repeat;
overflow: hidden;
}
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
    height: 500px;
    background-color: rgb(54, 57, 63);
    padding: 20px;
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
background-color: rgb(0, 0, 0);
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}
input[type=file] {
background-color: rgba(0, 0, 0, 0.527);
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}
</style>