<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : descriptor.proto
 */


namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.MethodDescriptorProto
 *
 * @\Protobuf\Annotation\Descriptor(
 *   name="MethodDescriptorProto",
 *   package="google.protobuf",
 *   fields={
 *     @\Protobuf\Annotation\Field(
 *       name="name",
 *       tag=1,
 *       type=9,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="input_type",
 *       tag=2,
 *       type=9,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="output_type",
 *       tag=3,
 *       type=9,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="options",
 *       tag=4,
 *       type=11,
 *       label=1,
 *       reference="google.protobuf.MethodOptions"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="client_streaming",
 *       tag=5,
 *       type=8,
 *       label=1,
 *       default="false"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="server_streaming",
 *       tag=6,
 *       type=8,
 *       label=1,
 *       default="false"
 *     )
 *   },
 *   extensions={
 *   }
 * )
 */
class MethodDescriptorProto extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * name optional string = 1
     *
     * @var string
     */
    protected $name = null;

    /**
     * input_type optional string = 2
     *
     * @var string
     */
    protected $input_type = null;

    /**
     * output_type optional string = 3
     *
     * @var string
     */
    protected $output_type = null;

    /**
     * options optional message = 4
     *
     * @var \google\protobuf\MethodOptions
     */
    protected $options = null;

    /**
     * client_streaming optional bool = 5
     *
     * @var bool
     */
    protected $client_streaming = null;

    /**
     * server_streaming optional bool = 6
     *
     * @var bool
     */
    protected $server_streaming = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->client_streaming = false;
        $this->server_streaming = false;
    }

    /**
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
        return $this->name !== null;
    }

    /**
     * Get 'name' value
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set 'name' value
     *
     * @param string $value
     */
    public function setName($value)
    {
        return $this->name = $value;
    }

    /**
     * Check if 'input_type' has a value
     *
     * @return bool
     */
    public function hasInputType()
    {
        return $this->input_type !== null;
    }

    /**
     * Get 'input_type' value
     *
     * @return string
     */
    public function getInputType()
    {
        return $this->input_type;
    }

    /**
     * Set 'input_type' value
     *
     * @param string $value
     */
    public function setInputType($value)
    {
        return $this->input_type = $value;
    }

    /**
     * Check if 'output_type' has a value
     *
     * @return bool
     */
    public function hasOutputType()
    {
        return $this->output_type !== null;
    }

    /**
     * Get 'output_type' value
     *
     * @return string
     */
    public function getOutputType()
    {
        return $this->output_type;
    }

    /**
     * Set 'output_type' value
     *
     * @param string $value
     */
    public function setOutputType($value)
    {
        return $this->output_type = $value;
    }

    /**
     * Check if 'options' has a value
     *
     * @return bool
     */
    public function hasOptions()
    {
        return $this->options !== null;
    }

    /**
     * Get 'options' value
     *
     * @return \google\protobuf\MethodOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set 'options' value
     *
     * @param \google\protobuf\MethodOptions $value
     */
    public function setOptions(\google\protobuf\MethodOptions $value)
    {
        return $this->options = $value;
    }

    /**
     * Check if 'client_streaming' has a value
     *
     * @return bool
     */
    public function hasClientStreaming()
    {
        return $this->client_streaming !== null;
    }

    /**
     * Get 'client_streaming' value
     *
     * @return bool
     */
    public function getClientStreaming()
    {
        return $this->client_streaming;
    }

    /**
     * Set 'client_streaming' value
     *
     * @param bool $value
     */
    public function setClientStreaming($value)
    {
        return $this->client_streaming = $value;
    }

    /**
     * Check if 'server_streaming' has a value
     *
     * @return bool
     */
    public function hasServerStreaming()
    {
        return $this->server_streaming !== null;
    }

    /**
     * Get 'server_streaming' value
     *
     * @return bool
     */
    public function getServerStreaming()
    {
        return $this->server_streaming;
    }

    /**
     * Set 'server_streaming' value
     *
     * @param bool $value
     */
    public function setServerStreaming($value)
    {
        return $this->server_streaming = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->name);
        }

        if ($this->input_type !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->input_type);
        }

        if ($this->output_type !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->output_type);
        }

        if ($this->options !== null) {
            $innerSize = $this->options->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->client_streaming !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->server_streaming !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->name = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->input_type = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->output_type = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\MethodOptions();

                $this->options = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->client_streaming = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->server_streaming = $reader->readBool($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->put($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->name !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->name);
        }

        if ($this->input_type !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->input_type);
        }

        if ($this->output_type !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->output_type);
        }

        if ($this->options !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->options->serializedSize($sizeContext));
            $this->options->writeTo($context);
        }

        if ($this->client_streaming !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->client_streaming);
        }

        if ($this->server_streaming !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->server_streaming);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createReadContext($stream);
        $message = new self();

        $message->readFrom($context);

        return $message;
    }


}

