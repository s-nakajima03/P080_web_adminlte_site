    // A point click event that uses the Renderer to draw a label next to the point
    // On subsequent clicks, move the existing label instead of creating a new one.
    Highcharts.addEvent(Highcharts.Point, 'click', function() {
      if (this.series.options.className.indexOf('popup-on-click') !== -1) {
        const chart = this.series.chart;
        const date = Highcharts.dateFormat('%A, %b %e, %Y', this.x);
        const text = `<b>${date}</b><br/>${this.y} ${this.series.name}`;

        const anchorX = this.plotX + this.series.xAxis.pos;
        const anchorY = this.plotY + this.series.yAxis.pos;
        const align = anchorX < chart.chartWidth - 200 ? 'left' : 'right';
        const x = align === 'left' ? anchorX + 10 : anchorX - 10;
        const y = anchorY - 30;
        if (!chart.sticky) {
          chart.sticky = chart.renderer
            .label(text, x, y, 'callout', anchorX, anchorY)
            .attr({
              align,
              fill: 'rgba(0, 0, 0, 0.75)',
              padding: 10,
              zIndex: 7 // Above series, below tooltip
            })
            .css({
              color: 'white'
            })
            .on('click', function() {
              chart.sticky = chart.sticky.destroy();
            })
            .add();
        } else {
          chart.sticky
            .attr({
              align,
              text
            })
            .animate({
              anchorX,
              anchorY,
              x,
              y
            }, {
              duration: 250
            });
        }
      }
    });


    Highcharts.chart('container', {
      chart: {
        scrollablePlotArea: {
          minWidth: 450
        },
        marginRight: 30, // 右側の余白を広げる

        responsive: {
          rules: [{
            condition: {
              maxWidth: 900, // この値は必要に応じて調整してください
              maxHeight: 300
            },
            chartOptions: {
              // legend: {
              //     align: 'center',
              //     verticalAlign: 'bottom',
              //     layout: 'horizontal'
              // },
              legend: {
                align: 'right', // 凡例を右側に配置
                verticalAlign: 'middle', // 垂直方向の中央に配置
                layout: 'vertical' // 凡例を垂直に表示
              },
              subtitle: {
                text: null
              },
              credits: {
                enabled: false
              },
              chart: {
                height: '100%'
              }
            }
          }]
        }

      },

      data: {
        csv: document.getElementById('csv-data').innerHTML,
        startRow: 1,
        endRow: 723,
        endColumn: 7,
        dateFormat: '%H:%M:%S' // 時刻のフォーマットを指定
      },

      title: {
        text: '電力消費量の推移',
        align: 'left'
      },

      subtitle: {
        text: 'データソース: サンプルデータ',
        align: 'left'
      },
      xAxis: {
        type: 'category',
        tickPositions: [0, 60, 120, 180, 240, 300, 360, 420, 480, 540, 600, 660, 720]
      },
      yAxis: {
        title: {
          text: '電力 (kW)'
        },
        plotLines: [{
            value: 100,
            // dashStyle: 'Dash', // これにより線が点線になります
            width: 2,
            // label: {
            //     // text: '100 kW', // 線にラベルを追加する場合
            //     // align: 'right',
            //     // x: -10 // ラベルを線から少し離す
            // },
            color: 'rgba(0, 0, 0, 1)', // 黄色の半透明の線

          },
          {
            value: 90,
            dashStyle: 'Dash', // これにより線が点線になります
            width: 1,
            // label: {
            //     text: '90 kW', // 線にラベルを追加する場合
            //     align: 'right',
            //     x: -10 // ラベルを線から少し離す
            // },
            color: 'rgba(255, 0, 0, 0.75)', // 黄色の半透明の線

          },
          {
            value: 80,
            dashStyle: 'Dash', // これにより線が点線になります
            width: 1,
            // label: {
            //     text: '90 kW', // 線にラベルを追加する場合
            //     align: 'right',
            //     x: -10 // ラベルを線から少し離す
            // },
            color: 'rgba(255, 165, 0, 0.75)', // 黄色の半透明の線

          },
          {
            value: 70,
            dashStyle: 'Dash', // これにより線が点線になります
            width: 1,
            // label: {
            //     text: '90 kW', // 線にラベルを追加する場合
            //     align: 'right',
            //     x: -10 // ラベルを線から少し離す
            // },
            color: 'rgba(255, 255, 0, 0.75)', // 黄色の半透明の線

          },
        ],
        labels: {
          align: 'left',
          x: 0,
          y: -5
        }
      },

      legend: {
        align: 'left',
        verticalAlign: 'top',
        borderWidth: 0
      },
      tooltip: {
        shared: true,
        crosshairs: true
      },
      plotOptions: {
        series: {
          marker: {
            enabled: false
          }
        }
      },

      series: [{
          name: '契約',
          dashStyle: 'ShortDot', // 'ShortDash', 'ShortDot', 'ShortDashDot', etc.
          lineWidth: 1,
          color: 'rgba(0, 0, 0, 1)' // 黄色の半透明の線
          // color: 'black'
        },
        {
          name: '警告',
          type: 'area', // エリアチャートとして表示
          dashStyle: 'ShortDot', // 'ShortDash', 'ShortDot', 'ShortDashDot', etc.
          lineWidth: 1,
          color: 'rgba(255, 0, 0, 0.25)', // 黄色の半透明の線
          fillColor: {
            linearGradient: {
              x1: 0,
              y1: 0,
              x2: 0,
              y2: 1
            },
            stops: [
              [0, 'rgba(255, 0, 0, 0.15)'], // 上部は半透明の黄色
              [1, 'rgba(255, 255, 255, 0)'] // 下部は半透明の黒
            ]
          },
          dashStyle: 'ShortDot',
          marker: {
            enabled: false
          }
        },
        {
          name: '注意',
          type: 'area', // エリアチャートとして表示
          dashStyle: 'ShortDot', // 'ShortDash', 'ShortDot', 'ShortDashDot', etc.
          lineWidth: 1,
          //color: 'orange'
          color: 'rgba(255, 165, 0, 0.25)', // 黄色の半透明の線
          fillColor: {
            linearGradient: {
              x1: 0,
              y1: 0,
              x2: 0,
              y2: 1
            },
            stops: [
              [0, 'rgba(255, 165, 0, 0.15)'], // 上部は半透明の黄色
              [1, 'rgba(255, 255, 255, 0)'] // 下部は半透明の黒
            ]
          },
          dashStyle: 'ShortDot',
          marker: {
            enabled: false
          }

        },
        {
          name: '情報',
          type: 'area', // エリアチャートとして表示
          lineWidth: 1,
          color: 'rgba(255, 255, 0, 0.25)', // 黄色の半透明の線
          fillColor: {
            linearGradient: {
              x1: 0,
              y1: 0,
              x2: 0,
              y2: 1
            },
            stops: [
              [0, 'rgba(255, 255, 0, 0.15)'], // 上部は半透明の黄色
              [1, 'rgba(255, 255, 255, 0)'] // 下部は半透明の黒
            ]
          },
          dashStyle: 'ShortDot',
          marker: {
            enabled: false
          }
          // ... 他の設定 ...
        },
        {
          name: '測定値',
          lineWidth: 2,
          color: 'rgba(0, 0, 255, 0.7)', // 黄色の半透明の線
        }
      ]
    });