<div class="card" v-if="index <= 5">
    <div class="image-box">
        <img :src="apartment.image" alt="#">
    </div>
    <div class="house-description">
        <h4>@{{apartment.name}}</h4>
        <p>@{{apartment.description}}</p>
    </div>
    <div class="house-info">
        <button class="btn-price" type="button" name="button">@{{apartment.price_day}}€ / night</button>
        <div class="reviews">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 0.322876L6.12257 3.98523H9.75528L6.81636 6.24869L7.93893 9.91104L5 7.64758L2.06107 9.91104L3.18364 6.24869L0.244718 3.98523H3.87743L5 0.322876Z" fill="#FFD74A"/>
            </svg>
            <p>4.3</p>
        </div>
    </div>
</div>


