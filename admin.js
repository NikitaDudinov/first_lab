let TitlePost = document.getElementById('title')
let DatePublish = document.getElementById('publish_date')
let NameAuthor = document.getElementById('author_name')
let ShortDescription = document.getElementById('short_description')
let HeroImage = document.getElementById('hero_image')
let HeroImageMin = document.getElementById('hero_image_min')
let AuthorPhoto = document.getElementById('author_photo')
let UpdateAuthorImage = document.getElementById('upload_author')
let DeleteAuthorImage = document.getElementById('delete_author')
let UploadHeroImage = document.getElementById('upload_Hero')
let DeleteHeroImage = document.getElementById('delete_Hero')
let UploadHeroMinImage = document.getElementById('upload_Hero_min')
let DeleteHeroMinImage = document.getElementById('delete_Hero_min')
let AddPost = document.getElementById('add-post__button')
let PostContent = document.getElementById('post_content')
let HeroImageBase64
let HeroImageMinBase64
let AuthorPhotoBase64

AddPost.addEventListener('click', (e) => {
	e.preventDefault()
	if (TitlePost.value == '') {
		document.getElementById('error__title').style.display = 'block'
		TitlePost.style = "border-color: #E86961"
	}
	else {
		document.getElementById('error__title').style.display = 'none'
		TitlePost.style = "border-color: #EAEAEA"
	}
	if (ShortDescription.value == '') {
		document.getElementById('error__subtitle').style.display = 'block'
		ShortDescription.style = "border-color: #E86961"
	}
	else {
		document.getElementById('error__subtitle').style.display = 'none'
		ShortDescription.style = "border-color: #EAEAEA"
	}
	if (NameAuthor.value == '') {
		document.getElementById('error__name').style.display = 'block'
		NameAuthor.style = "border-color: #E86961"
	}
	else {
		document.getElementById('error__name').style.display = 'none'
		NameAuthor.style = "border-color: #EAEAEA"
	}
	if (DatePublish.value == '') {
		document.getElementById('error__date').style.display = 'block'
		DatePublish.style = "border-color: #E86961"
	}
	else {
		document.getElementById('error__date').style.display = 'none'
		DatePublish.style = "border-color: #EAEAEA"
	}
	if (PostContent.value == '') {
		document.getElementById('error__content').style.display = 'block'
	}
	else {
		document.getElementById('error__content').style.display = 'none'
	}
	if (TitlePost.value === '' || ShortDescription.value === '' || NameAuthor.value === '' || DatePublish.value === '' || PostContent.value === '' || document.getElementById('hero_image_preview').src === '' || document.getElementById('author_photo_preview').src === '' || document.getElementById('hero_image_min_preview').src === '') {
		document.getElementById('total_error').style.display = 'flex'
		document.getElementById('publish_complete').style.display = 'none'
	}
	else {
		document.getElementById('publish_complete').style.display = 'flex'
		document.getElementById('total_error').style.display = 'none'
		fetch("http://localhost:8001/api", {
			method: "POST",
			body: JSON.stringify({
				title: TitlePost.value,
				subtitle: ShortDescription.value,
				content: PostContent.value,
				author: NameAuthor.value,
				featured: 0,
				publish_date: Date.parse(DatePublish.value),
				author_url: AuthorPhotoBase64,
				image_url: HeroImageBase64,
				image_card_url: HeroImageMinBase64
			}),
			headers: {
				"Content-type": "application/json; charset=UTF-8"
			}
		})
			.then((response) => response.json())
			.then((json) => console.log(json));
		// let data = {
		// 	'title': TitlePost.value,
		// 	'subtitle': ShortDescription.value,
		// 	'content': PostContent.value,
		// 	'author': NameAuthor.value,
		// 	'featured': 0,
		// 	'publish_date': Date.parse(DatePublish.value),
		// 	'author_url': AuthorPhotoBase64,
		// 	'image_url': HeroImageBase64
		// }
		// console.log(data)
	}
})

HeroImage.addEventListener('change', (e) => {
	const currFiles = e.target.files
	if (currFiles.length > 0) {
		let src = URL.createObjectURL(currFiles[0])
		let imagePreview = document.getElementById('hero_image_preview')
		imagePreview.src = src
		imagePreview.style.display = 'block'
		imagePreview = document.getElementById('sample__article-preview')
		imagePreview.src = src
		imagePreview.style.display = 'block'
		document.getElementById('sample_hero_image').style.display = 'none'
		document.getElementById('sample__article').style.display = 'none'
		document.getElementById('hero_image__description').style.display = 'none'
		document.getElementById('action-images_Hero').style.display = 'flex'
	}
	const file = HeroImage.files[0]
	const reader = new FileReader()
	reader.addEventListener('load', () => {
		HeroImageBase64 = reader.result
	})
	reader.readAsDataURL(file)
})
UploadHeroMinImage.addEventListener('change', (e) => {
	const currFiles = e.target.files
	if (currFiles.length > 0) {
		let src = URL.createObjectURL(currFiles[0])
		let imagePreview = document.getElementById('hero_image_min_preview')
		imagePreview.src = src
		imagePreview.style.display = 'block'
		imagePreview = document.getElementById('sample__card-preview')
		imagePreview.src = src
		imagePreview.style.display = 'block'
		document.getElementById('sample_hero_image_min').style.display = 'none'
		document.getElementById('sample__card-image').style.display = 'none'
	}
})

HeroImageMin.addEventListener('change', (e) => {
	const currFiles = e.target.files
	if (currFiles.length > 0) {
		let src = URL.createObjectURL(currFiles[0])
		let imagePreview = document.getElementById('hero_image_min_preview')
		imagePreview.src = src
		imagePreview.style.display = 'block'
		imagePreview = document.getElementById('sample__card-preview')
		imagePreview.src = src
		imagePreview.style.display = 'block'
		document.getElementById('sample_hero_image_min').style.display = 'none'
		document.getElementById('sample__card-image').style.display = 'none'
		document.getElementById('hero_min__image__description').style.display = 'none'
		document.getElementById('action-images_Hero_min').style.display = 'flex'
	}
	const file = HeroImageMin.files[0]
	const reader = new FileReader()
	reader.addEventListener('load', () => {
		HeroImageMinBase64 = reader.result
	})
	reader.readAsDataURL(file)
})
DeleteHeroMinImage.addEventListener('change', (e) => {
	document.getElementById('sample_hero_image_min').style.display = 'block'
	document.getElementById('sample__card-image').style.display = 'block'
	document.getElementById('hero_min__image__description').style.display = 'block'
	document.getElementById('hero_image_min_preview').style.display = 'none'
	document.getElementById('sample__card-preview').style.display = 'none'
	document.getElementById('action-images_Hero_min').style.display = 'none'
})

DeleteAuthorImage.addEventListener('change', (e) => {
	document.getElementById('sample_author_photo').style.display = 'block'
	document.getElementById('author_card-sample').style.display = 'block'
	document.getElementById('author_photo_preview').style.display = 'none'
	document.getElementById('author_card-preview').style.display = 'none'
	document.getElementById('action-images').style.display = 'none'
	document.getElementById('upload_photo').style.display = 'block'
})

DeleteHeroImage.addEventListener('change', (e) => {
	document.getElementById('sample_hero_image').style.display = 'block'
	document.getElementById('sample__article').style.display = 'block'
	document.getElementById('sample__article-preview').style.display = 'none'
	document.getElementById('hero_image_preview').style.display = 'none'
	document.getElementById('action-images_Hero').style.display = 'none'
	document.getElementById('hero_image__description').style.display = 'block'
})

UploadHeroImage.addEventListener('change', (e) => {
	const currFiles = e.target.files
	if (currFiles.length > 0) {
		let src = URL.createObjectURL(currFiles[0])
		let imagePreview = document.getElementById('sample__article-preview')
		imagePreview.src = src
		imagePreview.style.display = 'block'
		imagePreview = document.getElementById('hero_image_preview')
		imagePreview.src = src
		imagePreview.style.display = 'block'
		document.getElementById('sample_hero_image').style.display = 'none'
		document.getElementById('sample__article').style.display = 'none'
	}
})

UpdateAuthorImage.addEventListener('change', (e) => {
	const currFiles = e.target.files
	if (currFiles.length > 0) {
		let src = URL.createObjectURL(currFiles[0])
		let imagePreview = document.getElementById('author_photo_preview')
		imagePreview.src = src
		imagePreview.style.display = 'block'
		imagePreview = document.getElementById('author_card-preview')
		imagePreview.src = src
		imagePreview.style.display = 'block'
		document.getElementById('sample_author_photo').style.display = 'none'
		document.getElementById('author_card-sample').style.display = 'none'
	}
})


TitlePost.addEventListener('keyup', (e) => {
	if(TitlePost.value != ''){
		TitlePost.style = "background-color: #F7F7F7"
	}else{
		TitlePost.style = "background-color: #ffffff"
	}
	document.getElementById('card-view__title').innerHTML = TitlePost.value
	document.getElementById('post-view__title').innerHTML = TitlePost.value
})

NameAuthor.addEventListener('keyup', (e) => {
	if(NameAuthor.value != ''){
		NameAuthor.style = "background-color: #F7F7F7"
	}else{
		NameAuthor.style = "background-color: #ffffff"
	}
	document.getElementById('card_author_name').innerHTML = NameAuthor.value
})

ShortDescription.addEventListener('keyup', (e) => {
	if(ShortDescription.value != ''){
		ShortDescription.style = "background-color: #F7F7F7"
	}else{
		ShortDescription.style = "background-color: #ffffff"
	}
	document.getElementById('card-view__subtitle').innerHTML = ShortDescription.value
	document.getElementById('post-view__subtitle').innerHTML = ShortDescription.value
})
DatePublish.addEventListener('change', (e) => {
	if(DatePublish.value != ''){
		DatePublish.style = "background-color: #F7F7F7"
	}else{
		DatePublish.style = "background-color: #ffffff"
	}
	document.getElementById('publish_date-card').innerHTML = new Date(DatePublish.value).toLocaleDateString('en-GB')
})


AuthorPhoto.addEventListener('change', (e) => {
	const currFiles = e.target.files
	if (currFiles.length > 0) {
		let src = URL.createObjectURL(currFiles[0])
		let imagePreview = document.getElementById('author_photo_preview')
		imagePreview.src = src
		imagePreview.style.display = 'block'
		imagePreview = document.getElementById('author_card-preview')
		imagePreview.src = src
		imagePreview.style.display = 'block'
		document.getElementById('sample_author_photo').style.display = 'none'
		document.getElementById('author_card-sample').style.display = 'none'
		document.getElementById('action-images').style.display = 'flex'
		document.getElementById('upload_photo').style.display = 'none'
	}
	const file = AuthorPhoto.files[0]
	const reader = new FileReader()
	reader.addEventListener('load', () => {
		AuthorPhotoBase64 = reader.result
	})
	reader.readAsDataURL(file)
})

