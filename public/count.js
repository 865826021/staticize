/**
 * 计数器js文件
 *
 * Created by cpf on 2016/10/28. *
 */

var newsIds = {};       //保存每页列表中的新闻ID的数组
$(".news_count").each(function(i){
    newsIds[i] = $(this).attr("news-id");
});

//console.log(newsIds);

var url = "/index.php?c=index&a=getCount";

//ajax的post方式，根据得到的新闻ID数组，获取每个ID对应的点击数
$.post(url, newsIds, function(result) {
    if(result.status == 1){
        counts = result.data;

        /*
        * counts是一个数组，用each(a,b)方法，将数组拆分为key=value的形式
        * counts中的每一项，都对应一个键值对，类似counts[news_id]=count
        */
        $.each(counts, function(news_id, count){
            $(".node-" + news_id).html(count);
        });
    }
},"json");

