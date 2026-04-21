/**
 * WordPress dependencies
 */
import { Button } from '@wordpress/components';

/**
 * Internal dependencies
 */
import { getValue } from '@nelio/utils';

export const TestButton = (): JSX.Element => (
	<Button onClick={ () => void null }>Test { getValue() }</Button>
);
