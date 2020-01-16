var url = 'api/latest';
$.ajax({
    url: url,
    datatype : 'json',
    success : function(berhasil){
        $.each(berhasil.data, function(key, value){
              $.each(berhasil.data, function(key, value){
                $(".latest").append(
                    `
                    <div class="dont-miss-post-thumb">
                                <img src="/assets/img/artikel/${value.foto}" alt="img">
                            </div>
                            <div class="dont-miss-post-content">
                                <a href="#" class="font-pt">Berita Terakhir</a>
                                <span>Nov 29, 2017</span>
                            </div>                                  
                    `
                )
            })
        })
    }
})