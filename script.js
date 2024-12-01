$(document).ready(function(){
    //1.Dasar Selektor
    $('#header').css('text-align','center');//mengubah algin text pada header
    $('li').css('margin','5px');//Memberi margin pada semua <li>

    //2.Selektor Atribut
    $('img[alt="Alumni Photo"]').css('border','2px solid red');//Mengubah border pada gambar dengan alt="Alumni Photo 1"

    //3.Selektor Hirarki
    $('#alumniList li').css('font-size','18px');//Mengubah font size pada semua <li>di dalam #AlumniList

    //4.Selektor Filter
    $('li:even').css('color','blue');//Mengubah warna teks pada elemen<li>genap
    $('.featured').addClass('highlight');//Menambahkan class highlight pada elemen dengan class featured

    //Event Handing untuk Galeri Foto
    $('.gallery img').on('click',function(){
        var src = $(this).attr('src');
        $('#modalImage').attr('src',src);
        $('#myModal').attr('src','src');
        $('#myModal').fadeOut();
    });
    $(window).on('click',function(event){
        if($(Event.target).is('#myModal')){
            $('#myModal').fadeOut();
        }
    });
});