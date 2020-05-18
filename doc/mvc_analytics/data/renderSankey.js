var journey = [];

journey.push([['Referred by a friend', 'Took a sample', 10]
		,	['Referred by a friend', 'Filled a survey', 1]
		,	['Referred by a friend', 'Asked a question', 1]
		,	['Referred by a friend', 'Took a photo', 4]
		,	['Referred by a friend', 'Watched Video', 3]
		,	['Got a flier', 'Took a sample', 10]
		,	['Got a flier', 'Filled a survey', 5]
		,	['Got a flier', 'Asked a question', 5]
		,	['Got a flier', 'Took a photo', 7]
		,	['Got a flier', 'Watched Video', 15]
		,	['Referred by Facebook', 'Took a sample', 3]
		,	['Referred by Facebook', 'Filled a survey', 15]
		,	['Referred by Facebook', 'Asked a question', 2]
		,	['Referred by Facebook', 'Took a photo', 20]
		,	['Referred by Facebook', 'Watched Video', 15]
		,	['Took a sample', 'Bought Product', 5]
		,	['Took a sample', 'Shared on Facebook', 13]
		,	['Took a sample', 'Filed a complaint', 5]
		,	['Filled a survey', 'Bought Product', 8]
		,	['Filled a survey', 'Shared on Facebook', 7]
		,	['Filled a survey', 'Filed a complaint', 6]
		,	['Asked a question', 'Bought Product', 1]
		,	['Asked a question', 'Shared on Facebook', 1]
		,	['Asked a question', 'Filed a complaint', 1]
		,	['Took a photo', 'Bought Product', 4]
		,	['Took a photo', 'Shared on Facebook', 5]
		,	['Took a photo', 'Filed a complaint', 1]
		,	['Watched Video', 'Bought Product', 6]
		,	['Watched Video', 'Shared on Facebook', 15]
		,	['Watched Video', 'Filed a complaint', 1]
		,	['Bought Product', 'Referred a friend', 1]
		,	['Shared on Facebook', 'Referred a friend', 1]]);
journey.push([['Referred by a friend', 'Took a sample', 10]
		,	['Referred by a friend', 'Filled a survey', 1]
		,	['Referred by a friend', 'Asked a question', 1]
		,	['Referred by a friend', 'Took a photo', 4]
		,	['Referred by a friend', 'Watched Video', 3]
		,	['Got a flier', 'Took a sample', 10]
		,	['Got a flier', 'Filled a survey', 5]
		,	['Got a flier', 'Asked a question', 5]
		,	['Got a flier', 'Took a photo', 7]
		,	['Got a flier', 'Watched Video', 15]
		,	['Referred by Facebook', 'Took a sample', 3]
		,	['Referred by Facebook', 'Filled a survey', 15]
		,	['Referred by Facebook', 'Asked a question', 2]
		,	['Referred by Facebook', 'Took a photo', 20]
		,	['Referred by Facebook', 'Watched Video', 15]
		,	['Took a sample', 'Bought Product', 5]
		,	['Filled a survey', 'Bought Product', 8]
		,	['Asked a question', 'Bought Product', 1]
		,	['Took a photo', 'Bought Product', 4]
		,	['Watched Video', 'Bought Product', 6]]);
journey.push([['Referred by a friend', 'Took a photo', 4]
		,	['Got a flier', 'Took a photo', 7]
		,	['Referred by Facebook', 'Took a photo', 20]
		,	['Took a photo', 'Bought Product', 4]
		,	['Took a photo', 'Shared on Facebook', 5]
		,	['Took a photo', 'Filed a complaint', 1]]);
journey.push([['Referred by Facebook', 'Took a sample', 3]
		,	['Referred by Facebook', 'Filled a survey', 15]
		,	['Referred by Facebook', 'Asked a question', 2]
		,	['Referred by Facebook', 'Took a photo', 20]
		,	['Referred by Facebook', 'Watched Video', 15]]);

function renderSankey(selectedJourney) {
	document.getElementById('sankeyContainer').innerHTML = '<div id="sankey-container"></div>';

	Highcharts.chart('sankey-container', {

		title: false, /*{
			//text: 'Data-driven Customer Journey Map', 
			style: {
				color: '#fff'
			}
		},*/

		tooltip: {
			backgroundColor: '#FCFFC5',
			borderColor: 'black',
			borderRadius: 10,
			borderWidth: 3
		},

		chart: {
			backgroundColor: '#000'
		}, 

		series: [{
			keys: ['from', 'to', 'weight'],
			data: journey[selectedJourney],
			type: 'sankey',
			name: 'Customer Journey Flow'
		}]

	});
}

renderSankey();