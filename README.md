# CengFanMap
这是山师附中 2018 级 10 班的蹭饭地图，使用 [ECharts](https://echarts.apache.org/zh/index.html) 制作。

**蹭饭地图的网址是：https://ssfz.top/。**

本地图依据经纬度，精确定位各个高校，还可查看各个省份、城市甚至区的高清大图，使用者会更加明确高校的具体位置与相对位置。

## 为什么要把蹭饭地图做成网页版

在制作之前，笔者在知乎查找了一些关于蹭饭地图的制作方法。但感到常规蹭饭地图的制作有以下缺点：
- 是静态的，无法**进行交互**
- 无法**精确定位**高校地址，只能定位到省
- 需要借助 Photoshop、Powerpoint 等软件完成文字与图像处理，容易发生**排版不整齐**的情况
- 如果有同学大学期间发生转专业，校区地点（城市）发生变化，常规的蹭饭地图**无法更新**
- 地图扣取可能不准确
- ~~比较麻烦，笔者懒~~

而使用 ECharts 制作的可交互蹭饭地图，无需考虑上述问题。

## 地图数据来源

中国地图、全国大多数省份地图均来自于 GitHub 用户整理的 ECharts 地图。部分省份地图和所有市级、区级地图的 json 文件，均收集于 http://datav.aliyun.com/tools/atlas/index.html。

各高校的经纬度信息，来自高德开放平台 https://lbs.amap.com/。

## 地图中使用的颜色

陆地颜色是 #f3f8ff，与高德开放平台中的默认颜色保持一致。

网页中的普通文字颜色是 #9da5b3，与笔者喜爱的 [Eva Dark](https://marketplace.visualstudio.com/items?itemName=fisheva.eva-theme) 编辑器主题文字颜色相同。

大头针、提示框、提示框文字的颜色，也都摘取于 Eva Dark 主题。

## 一些声明

手机上观看可能偏小，需要双指缩放。使用高分辨率电脑查看地图，可以获得更佳的观看体验。

蹭饭地图所选用的背景图片，是多年前的一张 Windows 聚焦壁纸，壁纸中的场景是欧洲博登湖晨雾。

本地图的制作过程中，参考了 GitHub 用户 Heriyadi235 的 [这个项目](https://github.com/Heriyadi235/17dbsyg2cft)，在此表示感谢。

## 一些效果图

*鼠标移动到相应橙色大头针后，会显示相应的校名和同学的名字，在这里略去。*

![主地图](https://i.loli.net/2021/07/25/nT3XoFf6RAq8Gb4.png)
![去向详情](https://i.loli.net/2021/07/25/k5ZpUaYJBcnoNLD.png)
![省图实例](https://i.loli.net/2021/07/25/pjYX2WehkDRfaZU.png)
![市图实例](https://i.loli.net/2021/07/25/1onUjtmefhXrGD3.png)

## 最后再放一遍网址：https://ssfz.top/
