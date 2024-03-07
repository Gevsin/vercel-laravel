<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ env('APP_NAME') }} </title>



</head>

<body class="antialiased">
    <h1>Hello World</h1>
    <form wire:submit="save">
        <input type="text" wire:model="title">
    
        <input type="text" wire:model="content">
    
        <button type="submit">Save</button>
    </form>
    <a href="/dashboard" wire:navigate>Dashboard</a>
</body>

</html>