
@section('title', 'Categories')

<div>
    		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumb-title">
							<h2>Categories</h2>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->

		<div class="content">
			<div class="container">
				<div class="catsec clearfix">
					<div class="row">
                        @foreach ($categories as $category)
						<div class="col-lg-4 col-md-6">
                            @if ($category->categoryServiceCount() > 0)
							<a href="#" wire:click.prevent="service('{{ $category->slug }}')">
                            @endif
								<div class="cate-widget">
									<img src="{{ asset('assets/img/category/' .$category->image) }}" alt="">
									<div class="cate-title">
										<h3><span><i class="fas fa-circle"></i> {{ $category->name }}</span></h3>
									</div>
									<div class="cate-count">
										<i class="fas fa-clone"></i> {{ $category->categoryServiceCount() }}
									</div>
								</div>
							</a>
						</div>
                        @endforeach
					</div>
                    {{ $categories->links() }}

				</div>
			</div>﻿
		</div>﻿

</div>
