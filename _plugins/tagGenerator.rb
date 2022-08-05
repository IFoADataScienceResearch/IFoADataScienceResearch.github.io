module Jekyll

  # The list of pages and posts for each tag
  class TagsGenerator < Generator

    def generate(site)
      tags_html_page = site.pages.detect { |page| page.name == 'tags.html' }
      tags_html_page.data['all_tags'] = prepend_page_tags_to_post_tags(site)
    end

    # Returns a hash of pages and posts indexed by tags.
    #
    # Example:
    #   {
    #     'tech' => [<Page A>, <Page B>, <Post A>, <Post B>],
    #     'ruby' => [<Post B>]
    #   }
    #
    # By default Jekyll does not return the list of pages for each tag, only the posts
    def prepend_page_tags_to_post_tags(site)
      # Already given by Jekyll: the list of posts for each tag
      all_tags = site.post_attr_hash('tags')

      # Trick: loop over the pages in reverse order because they are prepend to the hash
      # => end up with the original order
      site.pages.reverse.each do |page|
        page_tags = page.data['tags']
        unless page_tags.nil?
          page_tags.each do |tag|
            # Pages in front of the list
            all_tags[tag].unshift(page)
          end
        end
      end

      return all_tags
    end
  end
end
