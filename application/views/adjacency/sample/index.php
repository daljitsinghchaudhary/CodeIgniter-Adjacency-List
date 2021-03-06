<?php $this->load->view('partials/header'); ?>
    <div class="page-header">
        <h1><?php echo $title; ?></h1>
    </div>

    <div class="row">
        <div class="span4">
            <pre><code>
&lt;ul&gt;
    &lt;?php echo build_tree('languages'); ?&gt;
&lt;/ul&gt;
            </code></pre>
            <ul>
                <?php echo build_tree('languages'); ?>
            </ul>
        </div>

        <div class="span8">
            <pre><code>
&lt;ol&gt;
    &lt;?php echo build_tree('languages', array('sub_start_tag' =&gt; '&lt;ol&gt;', 'sub_end_tag' =&gt; '&lt;/ol&gt;')); ?&gt;
&lt;/ol&gt;
            </code></pre>
            <ol>
                <?php echo build_tree('languages', array('sub_start_tag' => '<ol>', 'sub_end_tag' => '</ol>')); ?>
            </ol>
        </div>
    </div>
        <div class="row">
        <div class="span4">
            <pre><code>
&lt;ul&gt;
    &lt;?php echo build_tree_item('languages', 4); ?&gt;
&lt;/ul&gt;
            </code></pre>
            <ul>
                <?php echo build_tree_item('languages', 4); ?>
            </ul>
        </div>

        <div class="span8">
            <pre><code>
&lt;ol&gt;
    &lt;?php echo build_tree_item('languages', 4, array('sub_start_tag' =&gt; '&lt;ol&gt;', 'sub_end_tag' =&gt; '&lt;/ol&gt;')); ?&gt;
&lt;/ol&gt;
            </code></pre>
            <ol>
                <?php echo build_tree_item('languages', 4, array('sub_start_tag' => '<ol>', 'sub_end_tag' => '</ol>')); ?>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="span4">
            <pre><code>
&lt;ul class="breadcrumb"&gt;
    &lt;?php echo build_breadcrumb('languages', 4); ?&gt;
&lt;/ul&gt;
            </code></pre>
            <ul class="breadcrumb">
                <?php echo build_breadcrumb('languages', 4); ?>
            </ul>
        </div>
    </div>
<?php $this->load->view('partials/footer'); ?>