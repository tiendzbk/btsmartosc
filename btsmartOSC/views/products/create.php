<div class="container">
    <div class="row justify-content-sm-center">
        <div class="col-xs-12 col-sm-6 product-create">
            <?php print_r($data['productSimple']) ?>
            <h3 class="text-center">Create product</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="type-product">Type product</label>
                    <select class="form-control" id="type-product" name="type-product">
                        <option>-----</option>
                        <option value="simple">simple</option>
                        <option value="configurable">configurable</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Name:</label>
                    <input type="email" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="pwd">Sku:</label>
                    <input type="text" class="form-control" id="sku" name="sku">
                </div>

                <div class="form-group">
                    <label for="pwd">Price:</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>

                <div class="form-group">
                    <label for="pwd">Quantity:</label>
                    <input type="text" class="form-control" id="quantity" name="quantity">
                </div>

                <div class="form-group color-group">
                    <label for="color">Color:</label>
                    <?php foreach($data['attrColor'] as $color): ?>
                    <div class="checkbox form-check-inline" name="color" id="color">
                        <label><input type="checkbox" value="Red"><?php echo $color['value']?></label>
                    </div>
                    <?php endforeach ?>
                </div>

                <div class="form-group size-group">
                    <label for="size">Size:</label>
                    <?php foreach($data['attrSize'] as $size): ?>
                    <div class="checkbox form-check-inline" name="size" id="size">
                        <label><input type="checkbox" value="S"><?php echo $size['value'] ?></label>
                    </div>
                    <?php endforeach ?>
                </div>

                <div class="form-group children-simple-group">
                    <div class="children-simple-block">
                        <?php foreach($data['productSimple'] as $productSimple): ?>
                        <div class="media border p-3">
                            <div class="media-img">
                                <img src="public/image/TBL_7473.jpg" alt="image simple product">
                            </div>
                            <div class="media-body">
                                <div class="name-and-sku pull-left">
                                    <p class="children-simple-name"><strong>Product : </strong>babbabbsbs</p>   
                                    <p class="children-simple-sku"><strong>Sku : </strong><?php echo $productSimple['sku'] ?></p>
                                    <p class="check-simple-product">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="<?php echo $productSimple['id'] ?>"></label>
                                        </div>
                                    </p>
                                </div>

                                <div class="pull-right simple-attributes">
                                    <p><strong>Size : </strong>M</p>
                                    <p><strong>Color : </strong>Red</p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="public/js/create.js"></script>