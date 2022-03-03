<div dir="rtl" class="container">
    
    <style>
        body{
            font-family : Vazir;
            background-image: url('https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2017/02/Photoshop-Replace-Background-Featured.jpg');
        }
        

        .vertical-center {
            margin: 20;
            position: absolute;
            right: 50%;
            padding: 15px 30px;
        } 
    </style>
    
    <h1 class="border_box text-center text-dark py-4 my-4 "> {{$title}}</h1>
    <h5 class="border_box text-center text-warning py-4 my-4 "> {{$subtitle}}</h5>
    <button class="btn btn-success vertical-center">ورود</button>
    <input type="text" wire:model.lazy="subtitle">
    <input type="text" wire:model.debounce.5000ms="subtitle">
</div>
