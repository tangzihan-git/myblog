 // 金额转换万字单位 start
    function unitConvert(num) {
        if (num) {
            var moneyUnits = ["", "万"],
                dividend = 10000,
                curentNum = num, //转换数字
                curentUnit = moneyUnits[0]; //转换单位 
            for (var i = 0; i < 2; i++) {
                curentUnit = moneyUnits[i];
                if (strNumSize(curentNum) < 5) {
                    return num;
                }
            }
            curentNum = curentNum / dividend;
            var m = {
                num: 0,
                unit: ""
            }
            m.num = curentNum.toFixed(2);
            m.unit = curentUnit;
            return m.num + m.unit;
        }
    }

    function strNumSize(tempNum) {
        var stringNum = tempNum.toString()
        var index = stringNum.indexOf(".")
        var newNum = stringNum
        if (index != -1) {
            newNum = stringNum.substring(0, index)
        }
        return newNum.length;
    }
    // 金额转换万字单位 end
    var myChart = echarts.init(document.getElementById('china-map'));
    var oBack = document.getElementById("back");

    var provinces = ['shanghai', 'hebei', 'shanxi', 'neimenggu', 'liaoning', 'jilin', 'heilongjiang', 'jiangsu', 'zhejiang', 'anhui', 'fujian', 'jiangxi', 'shandong', 'henan', 'hubei', 'hunan', 'guangdong', 'guangxi', 'hainan', 'sichuan', 'guizhou', 'yunnan', 'xizang', 'shanxi1', 'gansu', 'qinghai', 'ningxia', 'xinjiang', 'beijing', 'tianjin', 'chongqing', 'xianggang', 'aomen'];
    var provincesText = ['上海', '河北', '山西', '内蒙古', '辽宁', '吉林', '黑龙江', '江苏', '浙江', '安徽', '福建', '江西', '山东', '河南', '湖北', '湖南', '广东', '广西', '海南', '四川', '贵州', '云南', '西藏', '陕西', '甘肃', '青海', '宁夏', '新疆', '北京', '天津', '重庆', '香港', '澳门'];
    // 全国省份数据
    var toolTipData = [{
        "provinceName": "北京",
        "provinceKey": 110000,
       
        "PeopleCount": 58
    }, {
        "provinceName": "天津",
        "provinceKey": 120000,
       
        "PeopleCount": 74
       
    }, {
        "provinceName": "河北",
        "provinceKey": 130000,
       
        "PeopleCount": 175
       
    }, {
        "provinceName": "山西",
        "provinceKey": 140000,
       
        "PeopleCount": 73
    }, {
        "provinceName": "内蒙古",
        "provinceKey": 150000,
       
        "PeopleCount": 46
    }, {
        "provinceName": "辽宁",
        "provinceKey": 210000,
       
        "PeopleCount": 74
    }, {
        "provinceName": "吉林",
        "provinceKey": 220000,
       
        "PeopleCount": 25
    }, {
        "provinceName": "黑龙江",
        "provinceKey": 230000,
       
        "PeopleCount": 25
    }, {
        "provinceName": "上海",
        "provinceKey": 310000,
       
        "PeopleCount": 78
    }, {
        "provinceName": "江苏",
        "provinceKey": 320000,
       
        "PeopleCount": 475
    }, {
        "provinceName": "浙江",
        "provinceKey": 330000,
       
        "PeopleCount": 332
    }, {
        "provinceName": "安徽",
        "provinceKey": 340000,
       
        "PeopleCount": 168
    }, {
        "provinceName": "福建",
        "provinceKey": 350000,
       
        "PeopleCount": 145
    }, {
        "provinceName": "江西",
        "provinceKey": 360000,
       
        "PeopleCount": 103
    }, {
        "provinceName": "山东",
        "provinceKey": 370000,
       
        "PeopleCount": 198
    }, {
        "provinceName": "河南",
        "provinceKey": 410000,
       
        "PeopleCount": 184
    }, {
        "provinceName": "湖北",
        "provinceKey": 420000,
       
        "PeopleCount": 125
    }, {
        "provinceName": "湖南",
        "provinceKey": 430000,
       
        "PeopleCount": 111
    }, {
        "provinceName": "广东",
        "provinceKey": 440000,
       
        "PeopleCount": 384
    }, {
        "provinceName": "广西",
        "provinceKey": 450000,
       
        "PeopleCount": 194
    }, {
        "provinceName": "海南",
        "provinceKey": 460000,
       
        "PeopleCount": 58
    }, {
        "provinceName": "重庆",
        "provinceKey": 500000,
       
        "PeopleCount": 35
    }, {
        "provinceName": "四川",
     
       
        "PeopleCount": 127
    }, {
        "provinceName": "贵州",
        "provinceKey": 520000,
       
        "PeopleCount": 78
    }, {
        "provinceName": "云南",
        "provinceKey": 530000,
       
        "PeopleCount": 87
    }, {
        "provinceName": "西藏",
        "provinceKey": 540000,
       
        "PeopleCount": 5
    }, {
        "provinceName": "陕西",
        "provinceKey": 610000,
       
        "PeopleCount": 65
    }, {
        "provinceName": "甘肃",
        "provinceKey": 620000,
       
        "PeopleCount": 40
    }, {
        "provinceName": "青海",
        "provinceKey": 630000,
       
        "PeopleCount": 3
    }, {
        "provinceName": "宁夏",
        "provinceKey": 640000,
       
        "PeopleCount": 14
    }, {
        "provinceName": "新疆",
        "provinceKey": 650000,
       
        "PeopleCount": 43
    }]
    var seriesData = [];
    for (var i = 0; i < toolTipData.length; i++) {
        seriesData[i] = {};
        seriesData[i].name = toolTipData[i].provinceName;
        seriesData[i].value = toolTipData[i].PeopleCount;
        seriesData[i].provinceKey = toolTipData[i].provinceKey;
    }

    var max = Math.max.apply(Math, seriesData.map(function(o) {
            return o.value
        })),
        min = 0; // 侧边最大值最小值
    var maxSize4Pin = 40,
        minSize4Pin = 30;
  
    var mapName = '';

    function getGeoCoordMap(name) {
        name = name ? name : 'china';
        /*获取地图数据*/
        var geoCoordMap = {};
        myChart.showLoading(); // loading start
        var mapFeatures = echarts.getMap(name).geoJson.features;
        myChart.hideLoading(); // loading end
        mapFeatures.forEach(function(v) {
            var name = v.properties.name; // 地区名称
            geoCoordMap[name] = v.properties.cp; // 地区经纬度
        });
        return geoCoordMap;
    }

    function convertData(data) { // 转换数据
        var geoCoordMap = getGeoCoordMap(mapName);
        var res = [];
        for (var i = 0; i < data.length; i++) {
            var geoCoord = geoCoordMap[data[i].name]; // 数据的名字对应的经纬度
            if (geoCoord) { // 如果数据data对应上，
                res.push({
                    name: data[i].name,
                    value: geoCoord.concat(data[i].value),
                });
            }
        }
        return res;
    };
    // 初始化echarts-map
    initEcharts("china", "用户访问统计");

    function initEcharts(pName, Chinese_) {
        var tmpSeriesData = pName === "china" ? seriesData : seriesDataPro;
        var tmp = pName === "china" ? toolTipData : provinceData;
        var option = {
            title: {
                text: Chinese_ || pName,
                left: 'center'
            },
            tooltip: {
                trigger: 'item',
                formatter: function(params) { // 鼠标滑过显示的数据
                    if (pName === "china") {
                        var toolTiphtml = ''
                        for (var i = 0; i < tmp.length; i++) {
                            if (params.name == tmp[i].provinceName) {
                                toolTiphtml += tmp[i].provinceName +  '<br>访问人次：' + tmp[i].PeopleCount;
                            }
                        }
                        return toolTiphtml;
                    } else {
                        var toolTiphtml = ''
                        for (var i = 0; i < tmp.length; i++) {
                            if (params.name == tmp[i].cityName) {
                                toolTiphtml += tmp[i].cityName +  '<br>访问人次：' + tmp[i].PeopleCount;
                            }
                        }
                        return toolTiphtml;
                    }
                }
            },
            visualMap: { //视觉映射组件
                show: true,
                min: min,
                max: max, // 侧边滑动的最大值，从数据中获取
                left: '5%',
                top: '96%',
                inverse: true, //是否反转 visualMap 组件
                // itemHeight:200,  //图形的高度，即长条的高度
                text: ['高', '低'], // 文本，默认为数值文本
                calculable: false, //是否显示拖拽用的手柄（手柄能拖拽调整选中范围）
                seriesIndex: 1, //指定取哪个系列的数据，即哪个系列的 series.data,默认取所有系列
                orient: "horizontal",
                inRange: {
                    color: ['#dbfefe', '#1066d5'] // 蓝绿
                }
            },
            geo: {
                show: true,
                map: pName,
                roam: false,
                label: {
                    normal: {
                        show: false
                    },
                    emphasis: {
                        show: false,
                    }
                },
                itemStyle: {
                    normal: {
                        areaColor: '#3c8dbc', // 没有值得时候颜色
                        borderColor: '#097bba',
                    },
                    emphasis: {
                        areaColor: '#fbd456', // 鼠标滑过选中的颜色
                    }
                }
            },
            series: [{
                    name: '散点',
                    type: 'scatter',
                    coordinateSystem: 'geo',
                    data: tmpSeriesData,
                    symbolSize: '1',
                    label: {
                        normal: {
                            show: true,
                            formatter: '{b}',
                            position: 'right'
                        },
                        emphasis: {
                            show: true
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: '#895139' // 字体颜色
                        }
                    }
                },
                {
                    name: Chinese_ || pName,
                    type: 'map',
                    mapType: pName,
                    roam: false, //是否开启鼠标缩放和平移漫游
                    data: tmpSeriesData,
                    // top: "3%",//组件距离容器的距离
                    // geoIndex: 0,
                    // aspectScale: 0.75,       //长宽比
                    // showLegendSymbol: false, // 存在legend时显示
                    selectedMode: 'single',
                    label: {
                        normal: {
                            show: true, //显示省份标签
                            textStyle: {
                                color: "#895139"
                            } //省份标签字体颜色
                        },
                        emphasis: { //对应的鼠标悬浮效果
                            show: true,
                            textStyle: {
                                color: "#323232"
                            }
                        }
                    },
                    itemStyle: {
                        normal: {
                            borderWidth: .5, //区域边框宽度
                            borderColor: '#0550c3', //区域边框颜色
                            areaColor: "#0b7e9e", //区域颜色
                        },
                        emphasis: {
                            borderWidth: .5,
                            borderColor: '#4b0082',
                            areaColor: "#ece39e",
                        }
                    }
                },
                {
                    name: '点',
                    type: 'scatter',
                    coordinateSystem: 'geo',
                    symbol: 'pin', //气泡
                    symbolSize: function(val) {
                        var a = (maxSize4Pin - minSize4Pin) / (max - min);
                        var b = minSize4Pin - a * min;
                        b = maxSize4Pin - a * max;
                        return a * val[2] + b;
                    },
                    label: {
                        normal: {
                            show: true,
                            formatter: function(params) {
                                return params.data.value[2];
                            },
                            textStyle: {
                                color: '#fff',
                                fontSize: 9
                            }
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: 'red' //标志颜色'#F62157'
                        }
                    },
                    zlevel: 6,
                    data: convertData(tmpSeriesData),
                },
            ]
        };
        // 针对海南放大
        if (pName == '海南') {
            option.series[1].center = [109.844902, 19.0392];
            option.series[1].layoutCenter = ['50%', '50%'];
            option.series[1].layoutSize = "300%";
        } else { //非显示海南时，将设置的参数恢复默认值
            option.series[1].center = undefined;
            option.series[1].layoutCenter = undefined;
            option.series[1].layoutSize = undefined;
        }
        myChart.setOption(option);
        /* 响应式 */
        $(window).resize(function() {
            myChart.resize();
        });

        myChart.off("click");

 
    }

    // 展示对应的省
    function showProvince(pName, Chinese_) {
        //这写省份的js都是通过在线构建工具生成的，保存在本地，需要时加载使用即可，最好不要一开始全部直接引入。
        loadBdScript('$' + pName + 'JS', './js/map/province/' + pName + '.js', function() {
            initEcharts(Chinese_);
        });
    }

    // 加载对应的JS
    function loadBdScript(scriptId, url, callback) {
        var script = document.createElement("script");
        script.type = "text/javascript";
        if (script.readyState) { //IE
            script.onreadystatechange = function() {
                if (script.readyState === "loaded" || script.readyState === "complete") {
                    script.onreadystatechange = null;
                    callback();
                }
            };
        } else { // Others
            script.onload = function() {
                callback();
            };
        }
        script.src = url;
        script.id = scriptId;
        document.getElementsByTagName("head")[0].appendChild(script);
    };