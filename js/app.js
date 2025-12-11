document.addEventListener('DOMContentLoaded', function () {
	console.log('DOMContentLoaded')

	$ = jQuery

	function initMenuToggle() {
		document.addEventListener('click', function (e) {
			console.log(e.target)
			if (e.target.matches('.hamburger')) {
				e.preventDefault()
				document.querySelector('.overlay').classList.add('open')
				document.querySelector('.nav-popup').classList.add('open')
				document.body.classList.add('hidden')
			} else if (
				e.target.matches('.overlay') ||
				e.target.matches('.nav-popup__close')
			) {
				document.querySelector('.hamburger').classList.remove('on')
				document.querySelector('.overlay').classList.remove('open')
				document.querySelector('.nav-popup').classList.remove('open')
				document.body.classList.remove('hidden')
			}
		})
	}

	initMenuToggle()

	function initStickyHeader() {
		const header = document.querySelector('.header')
		const headerHeight = header.offsetHeight

		window.addEventListener('scroll', () => {
			header.classList.toggle('sticky', window.scrollY > headerHeight)
		})
	}

	initStickyHeader()

	var reviews__slider = new Swiper('.reviews__slider', {
		slidesPerView: 3,
		spaceBetween: 32,
		// autoplay: {
		// 	delay: 3000,
		// 	disableOnInteraction: false,
		// },
		// speed: 300,
		on: {
			init: function () {
				setEqualSlideHeights('.reviews__slider', '.reviews__item')
			},
			resize: function () {
				setEqualSlideHeights('.reviews__slider', '.reviews__item')
			},
		},
		breakpoints: {
			880: {
				slidesPerView: 3,
			},
			576: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			300: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
		},
	})

	function setEqualSlideHeights(sliderClass, elementClass) {
		const elements = document.querySelectorAll(`${sliderClass} ${elementClass}`)
		let maxHeight = 0

		elements.forEach(el => {
			el.style.height = 'auto'
		})

		elements.forEach(el => {
			const height = el.offsetHeight
			if (height > maxHeight) {
				maxHeight = height - 4
			}
		})

		elements.forEach(el => {
			el.style.height = `${maxHeight}px`
		})
	}
	

	function monitorFileInputs() {
		const fileInputs = document.querySelectorAll('.wpcf7 input[type="file"]')

		fileInputs.forEach(function (fileInput) {
			fileInput.addEventListener('change', function () {
				const fileName =
					fileInput.files.length > 0 ? fileInput.files[0].name : ''
				if (fileName) {
					console.log('Selected file:', fileName)
					let fileNameDisplay = fileInput.nextElementSibling
					if (
						!fileNameDisplay ||
						!fileNameDisplay.classList.contains('file-name-display')
					) {
						fileNameDisplay = document.createElement('div')
						fileNameDisplay.className = 'file-name-display'
						fileInput.parentNode.insertBefore(
							fileNameDisplay,
							fileInput.nextSibling
						)
					}
					fileNameDisplay.textContent = `${fileName}`
				}
			})
		})
	}
	// monitorFileInputs()

	function resetFormAndCloseFancybox() {
		document.addEventListener('wpcf7mailsent', function (event) {
			setTimeout(function () {
				const form = event.target
				form.reset()

				// const fileNameDisplays = form.querySelectorAll('.file-name-display')
				// fileNameDisplays.forEach(function (display) {
				// 	display.remove()
				// })

				const responseOutput = form.querySelector('.wpcf7-response-output')
				if (responseOutput) {
					responseOutput.innerHTML = ''
				}

				const closeButton = document.querySelector('.fancybox-close-small')
				if (closeButton) {
					closeButton.click()
				}
			}, 2000)
		})
	}

	resetFormAndCloseFancybox()

	function enableSmoothScrollWithOffset() {
		document.addEventListener('click', function (event) {
			const target = event.target.closest('a[href*="#"]')

			if (target && document.body.classList.contains('home')) {
				event.preventDefault()

				const href = target.getAttribute('href')
				const anchorId = href.includes('#') ? href.split('#')[1] : ''
				const anchorElement = document.getElementById(anchorId)

				if (anchorElement) {
					const headerHeight =
						document.querySelector('header')?.offsetHeight || 0
					const offset = 50
					const elementPosition = anchorElement.getBoundingClientRect().top
					const offsetPosition =
						elementPosition + window.scrollY - headerHeight - offset

					window.scrollTo({
						top: offsetPosition,
						behavior: 'smooth',
					})
				}
			}
		})
	}

	// enableSmoothScrollWithOffset()





	function initializeTabsCases() {
		const tabContainers = document.querySelectorAll('.cases__tabs')

		tabContainers.forEach(container => {
			const tabs = container.querySelectorAll('.tab')
			const contents = container.querySelectorAll('.cases__panel')

			if (tabs.length === 0 || contents.length === 0) return
			container.classList.add('tabs-initialized')

			contents.forEach(content => {
				content.style.transition = 'max-height 0.3s ease'
				content.style.overflow = 'hidden'
				content.style.maxHeight = '0'
			})

			const activateTab = index => {
				tabs.forEach((tab, i) => {
					const content = contents[i]
					if (i === index) {
						tab.classList.add('active')
						content.style.maxHeight = content.scrollHeight + 1 + 'px'
						content.dataset.active = 'true'
					} else {
						tab.classList.remove('active')
						content.style.maxHeight = '0'
						content.dataset.active = 'false'
					}
				})
			}

			tabs.forEach((tab, index) => {
				tab.addEventListener('click', () => {
					activateTab(index)
				})
			})
			activateTab(0)

			const resizeObserver = new ResizeObserver(() => {
				const activeContent = container.querySelector(
					'.cases__panel[data-active="true"]'
				)
				if (activeContent) {
					activeContent.style.maxHeight = activeContent.scrollHeight + 'px'
				}
			})
			contents.forEach(content => resizeObserver.observe(content))
		})
	}

	initializeTabsCases()


	function initializeFAQAccordion() {
		const accordionContainer = document.querySelector('.faq__tabs')
		if (!accordionContainer) return

		const items = accordionContainer.querySelectorAll('.faq__tab')
		if (items.length === 0) return

		items.forEach(item => {
			const title = item.querySelector('.faq__title')
			const content = item.querySelector('.faq__content')

			if (!title || !content) return

			content.style.transition = 'max-height 0.3s ease'
			content.style.overflow = 'hidden'
			content.style.maxHeight = '0'

			title.addEventListener('click', () => {
				const isActive = item.classList.contains('active')

				items.forEach(otherItem => {
					const otherContent = otherItem.querySelector('.faq__content')
					if (otherContent) {
						otherContent.style.maxHeight = '0'
						otherItem.classList.remove('active')
					}
				})

				if (!isActive) {
					content.style.maxHeight = content.scrollHeight + 'px'
					item.classList.add('active')
				}
			})
		})

		const resizeObserver = new ResizeObserver(() => {
			items.forEach(item => {
				const content = item.querySelector('.faq__content')
				if (content && content.style.maxHeight !== '0px') {
					content.style.maxHeight = content.scrollHeight + 'px'
				}
			})
		})

		items.forEach(item => {
			const content = item.querySelector('.faq__content')
			if (content) resizeObserver.observe(content)
		})
	}
	initializeFAQAccordion()

	function initializeFAQAccordion2() {
		const accordionContainer = document.querySelector('.faq__tabs2')
		if (!accordionContainer) return

		const items = accordionContainer.querySelectorAll('.faq__tab')
		if (items.length === 0) return

		items.forEach(item => {
			const title = item.querySelector('.faq__title')
			const content = item.querySelector('.faq__content')

			if (!title || !content) return

			content.style.transition = 'max-height 0.3s ease'
			content.style.overflow = 'hidden'
			content.style.maxHeight = '0'

			title.addEventListener('click', () => {
				const isActive = item.classList.contains('active')

				items.forEach(otherItem => {
					const otherContent = otherItem.querySelector('.faq__content')
					if (otherContent) {
						otherContent.style.maxHeight = '0'
						otherItem.classList.remove('active')
					}
				})

				if (!isActive) {
					content.style.maxHeight = content.scrollHeight + 'px'
					item.classList.add('active')
				}
			})
		})

		const resizeObserver = new ResizeObserver(() => {
			items.forEach(item => {
				const content = item.querySelector('.faq__content')
				if (content && content.style.maxHeight !== '0px') {
					content.style.maxHeight = content.scrollHeight + 'px'
				}
			})
		})

		items.forEach(item => {
			const content = item.querySelector('.faq__content')
			if (content) resizeObserver.observe(content)
		})
	}
	initializeFAQAccordion2()
	

	function workflowItemsScroll() {
		const workflowItems = document.querySelectorAll('.workflow__item')
		let currentIndex = 1

		function scrollToWithOffset(element, offset) {
			const top =
				element.getBoundingClientRect().top + window.pageYOffset - offset
			window.scrollTo({
				top: top,
				behavior: 'smooth',
			})
		}

		function handleItemClick(event) {
			const clickedCount = event.target.closest('.workflow__count')
			if (!clickedCount) return
			const clickedItem = clickedCount.closest('.workflow__item')

			if (!clickedItem.classList.contains('opacity')) return

			clickedItem.classList.remove('opacity')

			scrollToWithOffset(clickedItem, 100)

			currentIndex++
			if (currentIndex < workflowItems.length) {
				const nextItem = workflowItems[currentIndex]

				nextItem.classList.remove('hidden')
				nextItem.classList.add('opacity')
			}
		}

		workflowItems.forEach(item => item.classList.remove('opacity'))

		if (workflowItems[1]) {
			workflowItems[1].classList.add('opacity')
		}

		workflowItems.forEach(item => {
			const countButton = item.querySelector('.workflow__count')
			if (countButton) {
				countButton.addEventListener('click', handleItemClick)
			}
		})
	}

	workflowItemsScroll()

	function tariffSlider(){
		new Swiper('.tariff-plans__slider', {
			slidesPerView: 3,
			spaceBetween: 32,
			// autoplay: {
			// 	delay: 3000,
			// 	disableOnInteraction: false,
			// },
			// speed: 300,
			breakpoints: {
				1024: {
					slidesPerView: 3,
				},
				768: {
					slidesPerView: 2.2,
				},
				576: {
					slidesPerView: 1.8,
					spaceBetween: 20,
				},
				414: {
					slidesPerView: 1.4,
					spaceBetween: 20,
				},
				300: {
					slidesPerView: 1.2,
					spaceBetween: 20,
				},
			},
		})
	}

	tariffSlider()

	function logosSlider() {
		new Swiper('.new-logo-slider__slider', {
			slidesPerView: 7,
			spaceBetween: 80,
			loop: true,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			speed: 300,
			breakpoints: {
				1024: {
					slidesPerView: 7,
				},
				768: {
					slidesPerView: 5.5,
				},
				576: {
					slidesPerView: 4.5,
					spaceBetween: 20,
				},
				414: {
					slidesPerView: 3.5,
					spaceBetween: 20,
				},
				300: {
					slidesPerView: 2.5,
					spaceBetween: 20,
				},
			},
		})
	}

	logosSlider()


	function toggleReviewText() {
		const reviewItems = document.querySelectorAll('.review--item__text')

		if (reviewItems.length === 0) return

		reviewItems.forEach(textBlock => {
			if (textBlock.classList.contains('processed')) return

			const words = textBlock.textContent.trim().split(/\s+/)

			if (words.length > 38) {
				const btn = document.createElement('a')

				const showText = textBlock.dataset.showText || 'Показать больше'
				const hideText = textBlock.dataset.hideText || 'Скрыть'

				btn.textContent = showText
				btn.classList.add('toggle-text-btn')

				const fullText = textBlock.innerHTML
				const shortText = words.slice(0, 38).join(' ') + '...'

				textBlock.innerHTML = shortText
				textBlock.parentNode.appendChild(btn)

				btn.addEventListener('click', () => {
					if (textBlock.classList.toggle('expanded')) {
						textBlock.innerHTML = fullText
						btn.textContent = hideText
					} else {
						textBlock.innerHTML = shortText
						btn.textContent = showText
					}
				})

				textBlock.classList.add('processed')
			}
		})
	}

	toggleReviewText()

	function initReviewsSlider() {
		const slider = document.querySelector('.new-user-reviews__reviews')
		if (!slider) return

		new Swiper('.new-user-reviews__reviews', {
			slidesPerView: 8,
			grid: {
				rows: 3,
				fill: 'row',
			},
			spaceBetween: 0,
			breakpoints: {
				300: {
					slidesPerView: 1.1,
					spaceBetween: 16,
					grid: {
						rows: 1,
						fill: 'row',
					},
				},
				414: {
					slidesPerView: 1.5,
					spaceBetween: 16,
					grid: {
						rows: 1,
						fill: 'row',
					},
				},
				576: {
					slidesPerView: 1.8,
					spaceBetween: 20,
					grid: {
						rows: 1,
						fill: 'row',
					},
				},
				768: {
					slidesPerView: 2.8,
					spaceBetween: 20,
					grid: {
						rows: 1,
						fill: 'row',
					},
				},
				1024: {
					slidesPerView: 8,
					spaceBetween: 0,
					grid: {
						rows: 3,
						fill: 'row',
					},
				},
			},
			// on: {
			// 	init: updateVideoHeight,
			// 	resize: updateVideoHeight,
			// },
		})


		// function updateVideoHeight() {
		// 	if (window.innerWidth >= 1024) return

		// 	let maxHeight = 0
		// 	const slides = document.querySelectorAll('.swiper-slide')

		// 	slides.forEach(slide => {
		// 		slide.style.height = 'auto'
		// 		const slideHeight = slide.offsetHeight
		// 		if (slideHeight > maxHeight) {
		// 			maxHeight = slideHeight
		// 		}
		// 	})

		// 	document.querySelectorAll('.review--item--video').forEach(video => {
		// 		video.style.height = `${maxHeight}px`
		// 	})
		// }
	}

	initReviewsSlider()

	function initTeamSlider(){
		new Swiper('.new-team__slider', {
			slidesPerView: 4,
			spaceBetween: 22,
			breakpoints: {
				300: {
					slidesPerView: 1.4,
					spaceBetween: 22,
				},
				576: {
					slidesPerView: 2,
					spaceBetween: 22,
				},
				768: { slidesPerView: 3 },
				991: { slidesPerView: 4, spaceBetween: 22 },
			},
		})
	}

	initTeamSlider()


	function initAnimationObserver() {
		const block = document.querySelector('.new-3-steps')
		if (!block) return

		function isInViewport(element) {
			const rect = element.getBoundingClientRect()
			return rect.top < window.innerHeight && rect.bottom > 0
		}

		function handleScroll() {
			if (isInViewport(block)) {
				block.classList.add('animation')
			} else {
				block.classList.remove('animation')
			}
		}

		window.addEventListener('scroll', handleScroll)
		handleScroll()
	}

	initAnimationObserver()

})
