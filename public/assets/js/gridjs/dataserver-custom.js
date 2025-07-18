new gridjs.Grid({
    pagination: true,
    search: {
      server: {
        url: (prev, keyword) => `${prev}?search=${keyword}`
      }
    },
    rowClass: (row, rowIndex) => {
        // Check the condition for the specific row
        if (rowIndex === 1) {
          return 'highlighted-row'; // Add the class name for the specific row
        }
        return '';
      },
    columns: ['Title', 'Director', 'Producer'],
    server: {
      url: 'https://swapi.dev/api/films/',
      then: data => data.results.map(movie => [movie.title, movie.director, movie.producer])
    },
    
}).render(document.getElementById("gridtable-4"));


// Chartist options
const opts = {
    height: '30px',
    showPoint: false,
    fullWidth:true,
    chartPadding: {top: 0,right: 0,bottom: 0,left: 0},
    axisX: {showGrid: false, showLabel: false, offset: 0},
    axisY: {showGrid: false, showLabel: false, offset: 0}
  };
 new gridjs.Grid({
    sort: true,
    columns: [
      'Symbol',
      'Last price',
      { 
        name: 'Difference', 
        formatter: (cell) => {
          return h('b', { style: {
            'color': cell > 0 ? 'green' : 'red'
          }}, cell);
        }
      },
      {
        name: 'Trend',
        sort: false,
        width: '20%',
        formatter: (cell) => {
          const ref = gCreateRef();
          const chart = h('div', { ref: ref })
          
          // setTimeout to ensure that the chart wrapper is mounted
          setTimeout(() => {
            // render the chart based on cell data
            ref.current && new Chartist.Line(ref.current, {
              series: [cell]
            }, opts);
          }, 0);
          
          return chart;
        }
      }],
      language: {
        'search': {
          'placeholder': '🔍 Search...'
        },
        'pagination': {
          'previous': '⬅️',
          'next': '➡️',
          'showing': '😃 Displaying',
          'results': () => 'Records'
        }
      },
    data: [
      ['AAPL', 360.2, 20.19, [360, 363, 366, 361, 366, 350, 370]],
      ['ETSY', 102.1, 8.22, [90, 91, 92, 90, 94, 95, 99, 102]],
      ['AMZN', 2734.8, -30.01, [2779, 2786, 2792, 2780, 2750, 2765, 2740, 2734]],
      ['TSLA', 960.85, -40.91, [993, 990, 985, 983, 970, 985, 988, 960]],
    ]
  }).render(document.getElementById("gridtable-5"));