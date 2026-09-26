class Slider {
	constructor(rangeElement, valueElement, emiElement, tooltipElement, options) {
		this.rangeElement = rangeElement
		this.valueElement = valueElement
		this.emiElement = emiElement
		this.tooltipElement = tooltipElement
		this.options = options

		this.rangeElement.addEventListener('input', this.updateSlider.bind(this))
	}

	init() {
		this.rangeElement.min = this.options.min
		this.rangeElement.max = this.options.max
		this.rangeElement.value = this.options.cur
		this.updateSlider()
	}

	asMoney(value) {
		return '₹' + parseFloat(value).toLocaleString('en-IN')
	}

	generateBackground(value) {
		let percentage = (value - this.options.min) / (this.options.max - this.options.min) * 100
		//return `background: linear-gradient(to right, rgb(47 138 81), rgb(49 139 83) 47.3684%, rgb(255, 255, 255) 47.3684%)`
		return 'background: linear-gradient(to right, #10eb9d, #4dbe9e ' + percentage + '%, #d3edff ' + percentage + '%, #d3edff 100%)'
	}

	updateSlider() {
		let val = this.rangeElement.value;
		this.valueElement.innerHTML = this.asMoney(val);
		this.rangeElement.style = this.generateBackground(val);

		// Update tooltip text
		this.tooltipElement.innerHTML = this.asMoney(val);

		// Calculate percent & slider dimensions
		let rangeWidth = this.rangeElement.offsetWidth;
		let thumbSize = 25; // matches your CSS thumb size
		let percent = (val - this.options.min) / (this.options.max - this.options.min);
		let tooltipWidth = this.tooltipElement.offsetWidth;

		// Calculate left offset (centered on thumb)
		let left = percent * (rangeWidth - thumbSize) + (thumbSize / 2) - (tooltipWidth / 2);

		// Prevent tooltip from overflowing slider bounds
		left = Math.max(0, Math.min(left, rangeWidth - tooltipWidth));
		this.tooltipElement.style.left = `${left}px`;

		// EMI Calculation
		let j = Math.abs(val);
		let v = Math.abs(11.5 / 12 / 100);
		let Q = 72;
		let amt = Math.pow(1 + v, Q) / (Math.pow(1 + v, Q) - 1) * v * j;
		this.emiElement.innerHTML = this.asMoney(Math.round(amt));
	}

}

// Initialize the slider on DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
	let rangeElement = document.querySelector('input[type="range"]')
	let valueElement = document.querySelector('.range__value span')
	let emiElement = document.querySelector('.range__emi span') || { innerHTML: '' } // optional
	let tooltipElement = document.getElementById('rangeTooltip')

	if (rangeElement && tooltipElement) {
		let slider = new Slider(rangeElement, valueElement, emiElement, tooltipElement, {
			min: 50000,
			max: 1000000,
			cur: 500000
		})
		slider.init()
	}
})
