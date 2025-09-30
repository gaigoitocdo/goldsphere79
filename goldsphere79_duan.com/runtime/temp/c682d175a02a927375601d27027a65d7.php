<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/www/wwwroot/51.79.209.207/application/index/view/order/lixibao.html";i:1690248718;}*/ ?>
<html style="font-size: 120px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <!-- 是否启用全屏模式 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- 全屏时状态颜色设置 -->
    <meta name="apple-mobile-web-status-bar-style" content="white">
    <!-- 禁用电话号码自动识别 -->
    <meta name="format-detection" content="telephone=no">
    <!--禁止读取本地缓存模板-->
    <meta http-equiv="Pragma" contect="no-cache">
    <!-- iPhone 启动图标 -->
    <link rel="apple-touch-icon" href="img/logo.png">
    <!-- Android 启动图标 -->
    <link rel="shortcut icon" href="img/logo.png">
    <!-- 添加 favicon icon -->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
    <!--<title>微交易</title> -->
    <script type="text/javascript">
        window.onload = function () {
//设置适配rem
            var change_rem = ((window.screen.width > 450) ? 450 : window.screen.width) / 375 * 100;
            document.getElementsByTagName("html")[0].style.fontSize = change_rem + "px";
            window.onresize = function () {
                change_rem = ((window.screen.width > 450) ? 450 : window.screen.width) / 375 * 100;
                document.getElementsByTagName("html")[0].style.fontSize = change_rem + "px";
            }
        }
    </script>
<title><?php echo lang('lc'); ?></title>
    <link href="/static/index/css/ionic.css" rel="stylesheet">
    <link href="/static/index/css/style.css" rel="stylesheet">
    <!-- <script src="/static/index/js/jquery-3.2.1.min.js"></script> -->
    <script src="/static/index/js/jquery-1.9.1.min.js"></script>
    <style type="text/css">
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    
    <style>
        .ionic_toast {
            z-index: 9999;
        }

        .toast_section {
            color: #FFF;
            cursor: default;
            font-size: 1em;
            display: none;
            border-radius: 5px;
            opacity: 1;
            padding: 10px 30px 10px 10px;
            margin: 10px;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 9999;
            background-color: rgba(0, 0, 0, 0.75);
        }

        .ionic_toast_top {
            top: 10px;
        }

        .ionic_toast_middle {
            top: 40%;
        }

        .ionic_toast_bottom {
            bottom: 10px;
        }

        .ionic_toast_close {
            border-radius: 2px;
            color: #CCCCCC;
            cursor: pointer;
            display: none;
            position: absolute;
            right: 4px;
            top: 4px;
            width: 20px;
            height: 20px;
        }

        .toast_close_icon {
            position: relative;
            top: 1px;
        }

        .ionic_toast_sticky .ionic_toast_close {
            display: block;
        }

        .ionic_toast_close:active {
        }
    </style>
    <style>
        .tabs a {
            color: gray;
            line-height: 20px;
        }

        .tabs a.active {
            color: rgb(73, 111, 254)
        }

        .tabs a.active path {
            fill: rgb(73, 111, 254)
        }

        html,
        body {
            overflow: auto !important;
            margin-bottom: 20px;
        }

        .tab-nav {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .header {
            background: rgb(73, 111, 254);
            color: white;
            text-align: right;
            padding: 10px;
            line-height: 30px;
            height: 50px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>


    <script src="/static/index/js/lk/order.js"></script>

    <!-- <script type="text/javascript" src="/static/index/js/lk/echarts-all-3.js"></script>
<script type="text/javascript" src="/static/index/js/lk/ecStat.min.js"></script>
<script type="text/javascript" src="/static/index/js/lk/dataTool.min.js"></script>
<script type="text/javascript" src="/static/index/js/lk/china.js"></script>
<script type="text/javascript" src="/static/index/js/lk/world.js"></script>
<script type="text/javascript" src="/static/index/js/lk/api"></script>
<script type="text/javascript" src="/static/index/js/lk/getscript"></script>
<script type="text/javascript" src="/static/index/js/lk/bmap.min.js"></script> -->
    <!-- 弹框插件 -->
    <script src="/static/layer/layer.js"></script>
    <!-- 公共函数 -->
    <script src="/static/public/js/function.js"></script>
    <script src="/static/public/js/base64.js"></script>
    <script type="text/javascript">
        var Base64 = new Base64();
    </script>
    
    <script>
        var charturl = '/index/order/getchart.html';
        $.get(charturl, function (_res) {
            var res = jQuery.parseJSON(Base64.decode(_res));
            $.each(res, function (k, v) {
                $('.' + k).html(v);
            })
        })
    </script>
    <script type="text/javascript">
        //iOS Web APP中点击链接跳转到Safari 浏览器新标签页的问题 devework.com
        //stanislav.it/how-to-prevent-ios-standalone-mode-web-apps-from-opening-links-in-safari
        if (("standalone" in window.navigator) && window.navigator.standalone) {
            var noddy, remotes = false;
            document.addEventListener('click', function (event) {
                noddy = event.target;
                while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                    noddy = noddy.parentNode;
                }
                if ('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes)) {
                    event.preventDefault();
                    document.location.href = noddy.href;
                }
            }, false);
        }


    </script>

</head>


<style>
    .detail {
        display: flex;
        position: absolute;
        bottom: 6px;
        width: 100%;
        flex-wrap: wrap;
    }

    .detail div {
        text-align: center;
        width: 50%
    }

    .detail h3 {
        margin: 0;
        padding: 0;
        font-size: 18px;
    }

    .detail p {
        margin-bottom: 3px;
    }

    .layui-layer-prompt textarea.layui-layer-input {
        height: 35px !important
    }
</style>
<style type="text/css">
    .on[data-v-28ad7794] {
        color: #0b7dd5;
        font-size: 12px;
    }

    .in[data-v-28ad7794] {
        color: #90a2b0;
        font-size: 12px;
    }

    .box[data-v-28ad7794] {
        position: fixed;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        left: 0;
        /*    font-size: 0.22rem;  */
        bottom: 0;
        width: 100%;
        height: 50px;
        background: #fff;
        z-index: 100;
    }

    .box .li[data-v-28ad7794] {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        height: 100%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .box .li img[data-v-28ad7794] {
        width: 20px;
        height: 20px;
    }

    .box .li span[data-v-28ad7794] {
        font: 12px;
        height: 20px;
        line-height: 20px;
    }
</style>

<style>
    a {
        text-decoration: none
    }
</style>

<div id="app">
    <div data-v-45ed8902="" class="mybox">
        <div data-v-28ad7794="" data-v-fb4b8be8="" class="box">
            <div data-v-28ad7794="" style="flex: 1 1 0%;"><a data-v-28ad7794=""
                                                             href="<?php echo Url('/index/index/index/token/'.$token); ?>"
                                                             class="li"><img data-v-28ad7794="" src="/tu/ico/sy.png"
                                                                             alt="">
                <span data-v-28ad7794="" class="in"><?php echo lang('sy'); ?></span></a></div>
            <div data-v-28ad7794="" style="flex: 1 1 0%;"><a data-v-28ad7794=""
                                                             href="<?php echo Url('/index/index/hangqing/token/'.$token); ?>"
                                                             class="li"><img data-v-28ad7794="" src="/tu/ico/hq.png"
                                                                             alt="">
                <span data-v-28ad7794="" class="in"><?php echo lang('hq'); ?></span></a></div>
            <div data-v-28ad7794="" style="flex: 1 1 0%;"><a data-v-28ad7794="" href="<?php echo Url('/index/order/lixibao/token/'.$token); ?>"
                                                             class="li"><img data-v-28ad7794="" src="/tu/ico/lc1.png"
                                                                             alt="">
                <span data-v-28ad7794="" class="on"><?php echo lang('lc'); ?></span></a></div>
            <div data-v-28ad7794="" style="flex: 1 1 0%;"><a data-v-28ad7794="" href="<?php echo url('/ddd/kf'); ?>"
                                                             class="li"><img
                    data-v-28ad7794="" src="/tu/ico/kf.png" alt="">
                <span data-v-28ad7794="" class="in"><?php echo lang('kf'); ?></span></a></div>
            <div data-v-28ad7794="" style="flex: 1 1 0%;"><a data-v-28ad7794=""
                                                             href="<?php echo Url('/index/user/index/token/'.$token); ?>"
                                                             class="li"><img data-v-28ad7794="" src="/tu/ico/my.png"
                                                                             alt="">
                <span data-v-28ad7794="" class="in"><?php echo lang('wd'); ?></span></a></div>
        </div>
        <!--body style='background:url(/static/index/dl/mine_top_bg.4c45ce4.png) repeat-x;'-->
        <img style="width: 100%" src='/static/index/dl/mine_top_bg.4c45ce4.png'/>


        <div class="news"
             style='width:93%;margin:auto;background:white;border-radius:6px; height:330px;position:relative;padding:30px 10px 20px 10px;margin-top: -0.6rem;'>
            <div align=center style='color:white;padding-top:20px;'>
                <p style="color:rgb(3,3,3);"><?php echo lang('zjey'); ?></p>
                <h2 style='margin-top:0;font-weight:bold;margin:10px 0 20px 0;font-family:Arial'><?php echo $user['lixibao']; ?></h2>
                <span style='background:rgb(247,247,247);border-radius:15px;margin:auto;color:gray;padding: 7px 35px;'><?php echo lang('zrsy'); ?><a
                        style='font-size:20px;color:rgb(255,100,0);'><?php echo $before_shouyi; ?></a><?php echo lang('yuan'); ?></span>
            </div>

            <div class='detail'>
                <div>
                    <p style='color:#9a9a9a'><?php echo lang('ljsy'); ?></p>
                    <h3> <?php echo $shouyi; ?></h3>
                </div>
                <!--<div>
                        <p>可提现金额</p>
                        <h3> 0.00</h3>
                   </div>-->
                <div>
                    <p style='color:#9a9a9a'><?php echo lang('rlx'); ?></p>
                    <h3> <?php echo $user['lixibao_lv']; ?></h3>
                </div>

                <br>
                <div style="display:flex;text-align:center;margin-top:10px;margin-bottom:10px;width:94%;">
                    <div style='width:49%;border-radius:5px;background:#0b7dd5;color:white;padding:10px 0;'
                         onclick="_in()"><?php echo lang('zr'); ?>
                    </div>
                    <div style='width:49%;border-radius:5px;margin-left:2%;background:rgb(255,186,0);color:white;padding:10px 0;'
                         onclick="_out()"><?php echo lang('qc'); ?>
                    </div>
                </div>
            </div>

            <div align=center
                 style='border-bottom:1px solid #e0e0e0;padding:20px 10px;color:rgb(11 125 213);font-size:18px;margin-top:1.5rem'>

                <?php echo lang('syjl'); ?>
            </div>

            <table width='100%' style='text-align:center;'>
                <tr>
                    <td width='50%'><?php echo lang('sj'); ?></td>
                    <td width='50%'><?php echo lang('drsy'); ?></td>
                </tr>
                <?php if(is_array($shouyi_list) || $shouyi_list instanceof \think\Collection || $shouyi_list instanceof \think\Paginator): $i = 0; $__LIST__ = $shouyi_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td width="50%"><?php echo date("Y-m-d",$vo['time']); ?></td>
                    <td width="50%"><?php echo $vo['shouyi']; ?></td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>


            <div class="tab-nav tabs" style="bottom:10px;">

                </body>
                <script>
                    function _in() {
                        layer.prompt({title: '<?php echo lang('qsrzrje'); ?>', formType: 2}, function (text, index) {
                            layer.close(index);
                            if (!isNaN(text) && text > 0) {
                                $.post("/index/order/lixibao_in.html", {money: text}, function (data) {
                                    layer.closeAll();

                                    if (data.type == 1) {
                                        layer.msg('<?php echo lang('zrcg'); ?>', function (data) {
                                            location.reload();
                                        });
                                    } else {
                                        layer.msg(data.data);
                                    }
                                }, 'json')
                            } else {
                                layer.msg('<?php echo lang('qsryxje'); ?>');
                            }
                        });
                    }

                    function _out() {
                        layer.prompt({title: '<?php echo lang('qsrqcje'); ?>', formType: 2}, function (text, index) {
                            layer.close(index);
                            if (!isNaN(text) && text > 0) {
                                $.post("/index/order/lixibao_out.html", {money: text}, function (data) {
                                    layer.closeAll();

                                    if (data.type == 1) {
                                        layer.msg('<?php echo lang('qccg'); ?>', function (data) {
                                            location.reload();
                                        });
                                    } else {
                                        layer.msg(data.data);
                                    }
                                }, 'json')
                            } else {
                                layer.msg('<?php echo lang('qsryxje'); ?>');
                            }
                        });
                    }
                </script>