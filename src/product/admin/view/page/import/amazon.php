<!--suppress HtmlUnknownTarget -->

<div class="aff-amazon-import">
    <form class="aff-amazon-import-search">
        <input class="aff-amazon-import-search-value" type="search" placeholder="Enter your search value...">

        <select class="aff-amazon-import-search-type">
            <option value="keyword">Keyword</option>
            <option value="keyword">ASIN</option>
            <option value="keyword">EAN</option>
        </select>
    </form>

    <div class="aff-amazon-import-results">
        <script class="aff-amazon-import-results-template" type="text/template">
            <article class="aff-amazon-import-results-item" data-parent="<% if(typeof variants !== 'undefined' && variants !== null) { %>true<% } else { %>false<% } %>" <% if(typeof shops !== 'undefined' && shops !== null) { %>data-affiliate-product-id="<%= shops[0].tracking.affiliate_product_id %>"<% } %>>
                <div class="aff-amazon-import-results-item-media">
                    <% if(typeof thumbnail !== 'undefined' && thumbnail !== null) { %>
                        <div class="aff-amazon-import-results-item-thumbnail">
                            <img class="aff-amazon-import-results-item-thumbnail-image" src="<%= thumbnail.src %>">
                        </div>
                    <% } %>
                </div>

                <div class="aff-amazon-import-results-item-content">
                    <h1 class="aff-amazon-import-results-item-title"><%= name %></h1>

                    <% if(typeof shops !== 'undefined' && shops !== null && shops[0].pricing.price !== null) { %>
                        <div class="aff-amazon-import-results-item-price">
                            <span class="aff-amazon-import-results-item-price-current">
                                <%= shops[0].pricing.price.value %> <%= shops[0].pricing.price.currency.symbol %>
                            </span>

                            <% if(shops[0].pricing.old_price) { %>
                                <span class="aff-amazon-import-results-item-price-old">
                                    <%= shops[0].pricing.old_price.value %> <%= shops[0].pricing.old_price.currency.symbol %>
                                </span>
                            <% } %>
                        </div>
                    <% } %>

                    <% if(typeof variants !== 'undefined' && variants !== null) { %>
                        <div class="aff-amazon-import-results-item-variants">
                            <% _.each(variants, function(variant) { %>
                                <div class="aff-amazon-import-results-item-variants-item" <% if(typeof shops !== 'undefined' && shops !== null) { %>data-affiliate-product-id="<%= variant.shops[0].tracking.affiliate_product_id %>"<% } %>>
                                    <div class="aff-amazon-import-results-item-variant-item-content">
                                        <h2 class="aff-amazon-import-results-item-variants-item-title"><%= variant.name %></h2>

                                        <% if(typeof variant.shops !== 'undefined' && variant.shops !== null && variant.shops[0].pricing.price !== null) { %>
                                            <div class="aff-amazon-import-results-item-variants-item-price">
                                                <span class="aff-amazon-import-results-item-variants-item-price-current">
                                                    <%= variant.shops[0].pricing.price.value %> <%= variant.shops[0].pricing.price.currency.symbol %>
                                                </span>

                                                <% if(variant.shops[0].pricing.old_price !== null) { %>
                                                    <span class="aff-amazon-import-results-item-variants-item-price-old">
                                                        <%= variant.shops[0].pricing.old_price.value %> <%= variant.shops[0].pricing.old_price.currency.symbol %>
                                                    </span>
                                                <% } %>
                                            </div>
                                        <% } %>

                                        <% if(typeof variant.attributes !== 'undefined' && variant.attributes !== null) { %>
                                            <ul class="aff-amazon-import-results-item-variants-item-attributes">
                                                <% _.each(variant.attributes, function(attribute) { %>
                                                    <li class="aff-amazon-import-results-item-variants-item-attributes-item">
                                                        <span><%= attribute.name %></span> <%= attribute.value %>
                                                    </li>
                                                <% }); %>
                                            </ul>
                                        <% } %>
                                    </div>
                                </div>
                            <% }); %>
                        </div>
                    <% } %>

                    <div class="aff-amazon-import-results-item-actions">
                        <button class="aff-amazon-import-results-item-actions-import">
                            <?php _e('Import', 'affilicious'); ?>
                        </button>
                    </div>
                </div>
            </article>
        </script>
    </div>
</div>
