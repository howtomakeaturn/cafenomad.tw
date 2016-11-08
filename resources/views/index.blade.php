@extends('layout')

@section('content')

<?php
function starClass($value){

    $warning = ['3.5 ★', '3.0 ★', '2.5 ★', '2.0 ★', '1.5 ★', '1.0 ★'];

    if ($value == '5.0 ★') {
        return 'blue';
    } else if ($value == '4.5 ★' || $value == '4.0 ★') {
        return 'blue';
    } else if (in_array($value, $warning)) {
        return 'yellow';
    } else {
        return '';
    }

}

function mrtClass($name){
    $line1 = ['動物園', '木柵', '萬芳社區', '辛亥', '麟光', '六張犁', '科技大樓', '大安',
        '忠孝復興', '南京復興', '中山國中', '松山機場', '大直', '劍南路', '西湖', '港墘',
        '文德', '內湖', '大湖公園', '葫洲', '東湖', '南港軟體園區', '南港展覽館'];

    $line2 = [ '淡水', '紅樹林', '竹圍', '關渡', '忠義', '復興崗', '北投', '新北投', '奇岩',
        '唭哩岸', '石牌', '明德', '芝山', '士林', '劍潭', '圓山', '民權西路', '雙連', '中山',
        '台北車站', '台大醫院', '中正紀念堂', '東門', '大安森林公園', '大安', '信義安和', '台北101/世貿', '象山'];

    $line3 = ['新店', '新店區公所', '七張', '小碧潭', '大坪林', '景美', '萬隆', '公館',
        '台電大樓', '古亭', '中正紀念堂', '小南門', '西門', '北門', '中山', '松江南京',
        '南京復興', '台北小巨蛋', '南京三民', '松山'];

    $line4 = ['南勢角', '景安', '永安市場', '頂溪', '古亭', '東門', '忠孝新生', '松江南京',
        '行天宮', '中山國小', '民權西路', '大橋頭', '三重國小', '三和國中', '徐匯中學', '三民高中',
        '蘆洲', '臺北橋', '菜寮', '三重', '先吝宮', '頭前庄', '新莊', '輔大', '丹鳳', '迴龍'];

    $line5 = ['頂埔', '永寧', '土城', '海山', '亞東醫院', '府中', '板橋', '新埔', '江子翠', '龍山寺',
        '西門', '台北車站', '善導寺', '忠孝新生', '忠孝復興', '忠孝敦化', '國父紀念館', '市政府',
        '永春', '後山埤', '昆陽', '南港', '南港展覽館'];

    $result = [];

    if (in_array($name, $line1)) {
        $result[] = 'line1';
    }

    if (in_array($name, $line2)) {
        $result[] = 'line2';
    }

    if (in_array($name, $line3)) {
        $result[] = 'line3';
    }

    if (in_array($name, $line4)) {
        $result[] = 'line4';
    }

    if (in_array($name, $line5)) {
        $result[] = 'line5';
    }

    return implode($result, ' ');
}

?>

<div class='row'>
    <p>上次更新日期：2016-11-06 22:27:58</p>
</div>

<div class='row'>
    <div class='col-md-3 -condensed'>
        <div class="alert alert-info" role="alert">
            點擊欄位可以排序。
        </div>
    </div>
    <div class='col-md-3 -condensed'>
        <div class="alert alert-success" role="alert">
            點擊店名會連到Facebook粉絲專頁。
        </div>
    </div>
    <div class='col-md-3 -condensed'>
        <div class="alert alert-danger" role="alert">
            移到 * 字號上會顯示網友備註。
        </div>
    </div>
    <div class='col-md-3 -condensed'>
        <div class="alert alert-warning" role="alert">
            點擊這裡可以參與編輯：<a href='https://goo.gl/OqOVI6' target="_blank">這裡</a>
        </div>
    </div>
    <div class='col-md-3 -condensed'>
        <div class="alert alert-warning" role="alert">
            台中地區資料整理中：<br><a href='https://goo.gl/n4HbQ4' target='_blank'>點擊這裡可以參與編輯</a>
        </div>
    </div>
    <div class='col-md-3 -condensed'>
        <div class="alert alert-warning" role="alert">
            高雄地區資料整理中：<br><a href='https://goo.gl/hmKH3d' target="_blank">點擊這裡可以參與編輯</a>
        </div>
    </div>
</div>

<div class='row'>
    <div class='mrt-filter'>
        <input type='checkbox' id='line1' value='line1'>
        <label class='legend -line1 -number' for='line1'>1</label>
        <label class='legend -line1' for='line1'>文湖線</label>
    </div>
    <div class='mrt-filter'>
        <input type='checkbox' id='line2' value='line2'>
        <label class='legend -line2 -number' for='line2'>2</label>
        <label class='legend -line2' for='line2'>淡水信義線</label>
    </div>
    <div class='mrt-filter'>
        <input type='checkbox' id='line3' value='line3'>
        <label class='legend -line3 -number' for='line3'>3</label>
        <label class='legend -line3' for='line3'>松山新店線</label>
    </div>
    <div class='mrt-filter'>
        <input type='checkbox' id='line4' value='line4'>
        <label class='legend -line4 -number' for='line4'>4</label>
        <label class='legend -line4' for='line4'>中和新蘆線</label>
    </div>
    <div class='mrt-filter'>
        <input type='checkbox' id='line5' value='line5'>
        <label class='legend -line5 -number' for='line5'>5</label>
        <label class='legend -line5' for='line5'>板南線</label>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('input[type="checkbox"]').on("change", filtMrt);
    });

    function filtMrt() {
        var displayLines = [];

         $('input[type="checkbox"]:checked').map(function(index, item){
            displayLines.push($(item).val());
        });

        $('.list > tr').hide();

        if (in_array(displayLines, 'line1')) {
            $('.list > tr.line1').show();
        }
        if (in_array(displayLines, 'line2')) {
            $('.list > tr.line2').show();
        }
        if (in_array(displayLines, 'line3')) {
            $('.list > tr.line3').show();
        }
        if (in_array(displayLines, 'line4')) {
            $('.list > tr.line4').show();
        }
        if (in_array(displayLines, 'line5')) {
            $('.list > tr.line5').show();
        }

        if (displayLines.length == 0) {
            $('.list > tr').show();
        }
    }

    function in_array(array, value) {
        for(var i=0;i<array.length;i++) {
            if (array[i] === value) {
                return true;
            }
        }
        return false;
    }
</script>

<style>
    .mrt-filter {
        display: inline-block;
        margin-right: 20px;
    }
    .mrt-filter > input {
        display: inline-block;
        width: 22px;
        height: 22px;
    }
    .mrt-filter > .legend {
        display: inline-block;
        color: white;
        font-weight: normal;
        vertical-align: top;
        padding: 5px 15px;
    }
    .mrt-filter > .legend.-number {
        font-weight: bold;
        margin-right: 0;
    }
    .mrt-filter > .legend.-line1 {
        background-color: #B7862F;
    }
    .mrt-filter > .legend.-line2 {
        background-color: #E3002D;
    }
    .mrt-filter > .legend.-line3 {
        background-color: #028559;
    }
    .mrt-filter > .legend.-line4 {
        background-color: #F8B51C;
        color: black;
    }
    .mrt-filter > .legend.-line5 {
        background-color: #0070BC;
    }

</style>

<br />

<div class='row'>
    <div id='table-wrapper'>


        <input class="search form-control" placeholder="Search" />
        <br />
        <table class='table table-hover table-condensed table-striped'>
            <thead>
                <tr>
                    <th class="sort" data-sort="c0">店名</th>
                    <th class="sort" data-sort="c1">wifi 穩定</th>
                    <th class="sort" data-sort="c2">通常有空位</th>
                    <th class="sort" data-sort="c3">安靜程度</th>
                    <th class="sort" data-sort="c4">咖啡好喝</th>
                    <th class="sort" data-sort="c5">價格便宜</th>
                    <th class="sort" data-sort="c6">裝潢/音樂佳</th>
                    <th class="sort" data-sort="c7">離捷運站近</th>
                    <th class="sort" data-sort="c8">捷運站</th>
                    <th class="sort" data-sort="c9">有無限時</th>
                    <th class="sort" data-sort="c10">插座多</th>
                    <th class="sort" data-sort="c11">可站立工作</th>
                    <th>地址</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach($cafes as $index => $cafe)
                <tr class='{{mrtClass($cafe[8])}}'>
                    <td class="c0"><a href='{{$cafe[15]}}' target='_blank' data-toggle="tooltip" data-placement="right" title="{{$cafe[13]}} - {{$cafe[12]}}">{{$cafe[0]}}@if($cafe[13]!=='') * @endif</a></td>
                    <td class="c1 {{starClass($cafe[1])}}">{{$cafe[1]}}</td>
                    <td class="c2 {{starClass($cafe[2])}}">{{$cafe[2]}}</td>
                    <td class="c3 {{starClass($cafe[3])}}">{{$cafe[3]}}</td>
                    <td class="c4 {{starClass($cafe[4])}}">{{$cafe[4]}}</td>
                    <td class="c5 {{starClass($cafe[5])}}">{{$cafe[5]}}</td>
                    <td class="c6 {{starClass($cafe[6])}}">{{$cafe[6]}}</td>
                    <td class="c7 {{starClass($cafe[7])}}">{{$cafe[7]}}</td>
                    <td class="c8 {{starClass($cafe[8])}}">{!! str_replace('/', '<br>', $cafe[8]) !!}</td>
                    <td class="c9 {{starClass($cafe[9])}}">{{$cafe[9]}}</td>
                    <td class="c10 {{starClass($cafe[10])}}">{{$cafe[10]}}</td>
                    <td class="c11 {{starClass($cafe[11])}}">{{$cafe[11]}}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="{{$cafe[14]}}">
                          顯示
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <style>

            .col-md-3.-condensed {
                padding: 0;
                padding-right: 10px;
            }

            th {
                cursor: pointer;
            }
            .c0 > a {
                color: black;
            }
            .blue {
                color: #2196F3;
            }
            .yellow {
                color: #FFC107;
            }
        </style>

    </div>
</div>

<script type="text/javascript">
    var options = {
        valueNames: [ 'c0', 'c1', 'c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'c9', 'c10', 'c11' ]
    };
    var cafeList = new List('table-wrapper', options);

    $(function () {
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="tooltip"]').tooltip({
            trigger : 'hover'
        });
    })
</script>

@endsection
